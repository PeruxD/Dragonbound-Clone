using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Threading;
using System.IO;
using WebSocketSharp;
//using WebSocketSharp.Net;
using WebSocketSharp.Server;
using Newtonsoft.Json;
using Newtonsoft.Json.Linq;
using System.Web;
#region Using
using GameServerDB.Packets;
using GameServerDB.Components;
#endregion


namespace GameServerDB
{
    public class Serverb : WebSocketService
    {
        Session _session;
        protected override void OnOpen()
        {
            string _hi_p = "[9,41,\"Beginners\",0,0]";
            Send(_hi_p);

            _session = new Session(this);
            Program.SessionsManager.AddSession(_session);
        }
        protected override void OnClose(CloseEventArgs e)
        {
            Program.SessionsManager.CloseSession(_session);
        }

        protected override void OnMessage(MessageEventArgs e)
        {
            try
            {
                switch (e.Type)
                {
                    case Opcode.TEXT:
                        {
                            JArray dcode = JArray.Parse(e.Data);
                            ClientOpcode opcode = (ClientOpcode)int.Parse(dcode[0].ToString());
                            LogConsole.Show(LogType.DEBUG, "opcode: {0}", opcode);
                            Program.PacketsManager.ProcessBytes(_session, ref dcode);
                            break;
                        }
                    default:
                        {
                            break;
                        }
                }
            }
            catch (Exception Ex)
            { 
                LogConsole.Show(LogType.ERROR, "{0}", Ex.ToString());
            }
        }
    }
}
