using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace GameServerDB.Components
{
    class SessionsManager
    {
        public Dictionary<int, Session> Sessions;
        private HashSet<int> IDs = new HashSet<int>();
        public int SessionsPoolingAmount;

        public SessionsManager()
        {
            Sessions = new Dictionary<int, Session>();
            SessionsPoolingAmount = 120; //max players
        }

        public void AddSession(Session _Session)
        {
            int ID = GetFreeID();
            IDs.Add(ID);

            _Session.ID = ID;

            Sessions.Add(_Session.ID, _Session);
        }

        public void CloseSession(Session _Session)
        {
            Sessions.Remove(_Session.ID);
            IDs.Remove(_Session.ID);
            _Session.Clear();
        }

        public int GetFreeID()
        {
            for (int i = 1; i < SessionsPoolingAmount; i++)
            {
                if (IDs.Contains(i) == false)
                {
                    return i;
                }
            }
            return 0;
        }
    }
}
