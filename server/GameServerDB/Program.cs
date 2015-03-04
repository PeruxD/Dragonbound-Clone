using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;
using System.Reflection;
using System.Threading;
using System.Threading.Tasks;
using WebSocketSharp;
using WebSocketSharp.Server;
using GameServerDB.UserManager;
using GameServerDB.ChanelManager;
using GameServerDB.Utily;

namespace GameServerDB
{
    class Program
    {
        #region Conf
        private static Thread _LoopThrreading;
        public static List<maprw> RMaps = new List<maprw>();
        public static List<UserClass> Users = new List<UserClass>();
        public static List<Channel> Chanels = new List<Channel>();
        public static MySqlBase _SQL = new MySqlBase();
        public static string PATH = "";

        public static string WSurl = "ws://";
        public static string LSPort = "9002";
        public static string LSIP = "localhost";
        public static bool debug = false;

        public static string MIp = "localhost";
        public static string MUser = "root";
        public static string MPass = "";
        public static int MPort = 3306;
        public static string MDb = "db_clone";
        #endregion
        static void Main(string[] args)
        {
            LogConsole._Load();
            PATH = Environment.CurrentDirectory.ToString();
            Inix ini = null;

            #region Load Settings
            try
            {
                if (File.Exists(PATH + @"\Settings\Settings.ini"))
                {
                    ini = new Inix(PATH + @"\Settings\Settings.ini");
                    LSPort = ini.GetValue("Server", "port", 9002).ToString();
                    LSIP   = ini.GetValue("Server", "ip", "localhost").ToString();

                    MIp   = ini.GetValue("MySql", "ip", "localhost").ToString();
                    MUser = ini.GetValue("MySql", "user", "root").ToString();
                    MPass = ini.GetValue("MySql", "pass", "").ToString();
                    MDb   = ini.GetValue("MySql", "db", "db_clone").ToString();
                    MPort = Convert.ToInt32(ini.GetValue("MySql", "port", 3306));

                    debug = Convert.ToBoolean(ini.GetValue("Console", "debug", false));

                    ini = null;
                    LogConsole.Show(LogType.INFO, "Has loaded your ip settings successfully");
                }
                else
                {
                    LogConsole.Show(LogType.ALERT, "Settings.ini could not be found, using default setting");
                }
            }
            catch (Exception excc)
            {
                LogConsole.Show(LogType.ERROR, " {0}", excc.ToString());
                return;
            }
            #endregion


            _SQL.Init(MIp, MUser, MPass, MDb, MPort);

            MapsL.LoadMaps.Load();

            WSurl = WSurl + LSIP + ":" + LSPort;

            var wssv = new WebSocketServiceHost<Serverb>(WSurl);
            
            wssv.OnError += (sender, e) =>
                {
                    LogConsole.Show(LogType.ERROR, "[WS]: Error {0} ", e.Message);
                };

            wssv.Start();
            LogConsole.Show(LogType.ALERT, "Server Listening on port: {0}", wssv.Port);

            _LoopThrreading = new Thread(new ThreadStart(Program.LoopConsole));
            _LoopThrreading.Priority = ThreadPriority.BelowNormal;
            _LoopThrreading.Start();

            while (true)
            {
                Thread.Sleep(1000);

                string _comm = Console.ReadLine();
                switch (_comm)
                {
                    case "online":
                        LogConsole.Show(LogType.INFO, "Users Online: {0}", Users.Count());
                        break;
                    default:
                        break;
                }
            }
        }

        private static void LoopConsole()
        {
            while (true)
            {
                object[] totalMemory = new object[] { "DragonBoundEmu - GameServer | Ram Usage: ", GC.GetTotalMemory(false) / (long)1024, " KB | " };
                Console.Title = string.Concat(totalMemory);
                Thread.Sleep(1500);
            }
        }
    }
}
