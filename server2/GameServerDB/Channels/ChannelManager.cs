using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using GameServerDB.Users;

namespace GameServerDB.Channels
{
    public class ChannelManager
    {
        public List<Channel> AllChannels = new List<Channel>();
        private HashSet<int> IDs = new HashSet<int>();
        int max_channels = 100;



        public Channel CreateChannel(string name, string password, int map, int type)
        {
            Channel _chatmp = new Channel();
            int id = GetFreeID();

            _chatmp.ID = id;
            _chatmp.password = password;
            _chatmp.map = map;
            _chatmp.Type = type;

            AllChannels.Add(_chatmp);

            return _chatmp;
        }

        public void ExitChannel(int ID, User user)
        {
            GetChannel(ID).AllUsers.Remove(user);
        }

        public void RemoveChannel(int ID)
        {
            Channel _cha = GetChannel(ID);
            //_cha 
            AllChannels.Remove(_cha);
        }


        public Channel GetChannel(int ID)
        {
            foreach (var Channel in AllChannels)
            {
                if (Channel.ID == ID)
                {
                    return Channel;
                }
            }
            return null;
        }

        public int GetFreeID()
        {
            for (int i = 1; i < max_channels; i++)
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
