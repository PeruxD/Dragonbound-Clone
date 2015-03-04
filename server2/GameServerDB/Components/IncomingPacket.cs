using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Newtonsoft.Json;
using Newtonsoft.Json.Linq;

namespace GameServerDB.Components
{
    class IncomingPacket
    {
        public int opcode;
        public JArray Packet;
        public int position = 0;
        public IncomingPacket(JArray _Data)
        {
            position = 0;
            Packet = _Data;
            opcode = int.Parse(_Data[position++].ToString());
        }

        public int GetInt()
        {
            return Packet[position++].ToObject<int>();
        }

        public string GetString()
        {
            return Packet[position++].ToObject<string>();
        }

        public string ToString()
        {
            return Packet[position++].ToString();
        }

        public int GetInt(int pos)
        {
            return Packet[pos].ToObject<int>();
        }

        public string GetString(int pos)
        {
            return Packet[pos].ToObject<string>();
        }
    }
}
