using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using GameServerDB.Components;
using System.IO;
using System.Web;
using Newtonsoft.Json;


namespace GameServerDB.Packets.Incoming
{
    class Reqchat : IIncomingPacketEvent
    {
        public void Invoke(Session _Session, IncomingPacket _Packet)
        {
            string _ctmp = _Packet.GetString();

            string msj_f = HttpUtility.HtmlEncode(_ctmp.Replace("\\\"", "\""));

            StringBuilder sb = new StringBuilder();
            StringWriter sw = new StringWriter(sb);
            using (JsonWriter writer = new JsonTextWriter(sw))
            {
                writer.Formatting = Formatting.None;
                writer.WriteStartArray();
                writer.WriteValue((int)ServerOpcode.chat);
                writer.WriteValue(msj_f);
                writer.WriteValue(_Session.User.Name);

                if (_Session.User.rank >= 24)
                    writer.WriteValue(ChatType.CHAT_TYPE_GM); //type
                else
                    writer.WriteValue(0); //type

                if (_Session.User.guild > 0)
                    writer.WriteValue(_Session.User.guild_name);

                writer.WriteEndArray();
            }

            _Session.Broadcast(sb.ToString());
        }
    }
}
