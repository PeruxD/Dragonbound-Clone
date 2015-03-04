using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Reflection;
using GameServerDB.Utily;
using Newtonsoft.Json;
using Newtonsoft.Json.Linq;
using GameServerDB.Components;
using GameServerDB.Packets.Incoming;

namespace GameServerDB.Packets
{
    class PacketsManager
    {
        public Dictionary<int, IIncomingPacketEvent> IncomingEvents;
        public Dictionary<string, int> IncomingEventsInfo;

        public PacketsManager()
        {
            IncomingEventsInfo = new Dictionary<string, int>();
            foreach (var Packet in typeof(IncomingPackets).GetFields())
            {
                var PacketId = (int)Packet.GetValue(0);
                var PacketName = Packet.Name;

                if (!IncomingEventsInfo.ContainsValue(PacketId))
                {
                    IncomingEventsInfo.Add(PacketName, PacketId);
                }
            }

            IncomingEvents = new Dictionary<int, IIncomingPacketEvent>();
            foreach (Type Type in Assembly.GetCallingAssembly().GetTypes())
            {
                if (Type == null)
                {
                    continue;
                }

                if (Type.GetInterfaces().Contains(typeof(IIncomingPacketEvent)))
                {
                    var ConstructorInfo = Type.GetConstructor(new Type[] { });
                    if (ConstructorInfo != null)
                    {
                        
                        var Constructed = ConstructorInfo.Invoke(new object[] { }) as IIncomingPacketEvent;
                        int Header = GetHeader(Constructed);
                        
                        if (!IncomingEvents.ContainsKey(Header) && Header >= 0)
                        {
                            IncomingEvents.Add(Header, Constructed);
                        }
                    }
                }
            }

            int Outgoings = typeof(OutgoingPackets).GetFields().Count();

            LogConsole.Show(LogType.INFO, "Loaded: {0} IncomingPackets", IncomingEvents.Count);
            LogConsole.Show(LogType.INFO, "Loaded: {0} OutgoingPackets", Outgoings);
        }

        public void ProcessBytes(Session _Session, ref JArray _Data)
        {
            try
            {
                IncomingPacket IncomingPacket = new IncomingPacket(_Data);

                if (IncomingEvents.ContainsKey(IncomingPacket.opcode))
                {
                    IIncomingPacketEvent Event = IncomingEvents[IncomingPacket.opcode];

                    if (_Session != null)
                    {
                        Event.Invoke(_Session, IncomingPacket);
                    }
                }
                else
                {
                    LogConsole.Show(LogType.ERROR, "[Opcode]: {0}", (ClientOpcode)IncomingPacket.opcode);
                }
            }
            catch (Exception e)
            {
                LogConsole.Show(LogType.DEBUG, "[ProcessByte]: {0}", e.Message);
            }
        }

        public int GetHeader(IIncomingPacketEvent _Event)
        {
            using (DictionaryAdapter<string, int> DA = new DictionaryAdapter<string, int>(IncomingEventsInfo))
            {
                return DA.TryPopValue(_Event.GetType().Name);
            }
        }
    }
}
