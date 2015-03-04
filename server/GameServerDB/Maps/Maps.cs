using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;
using System.Drawing;
using System.Threading.Tasks;
using GameServerDB.Utily;
using System.Collections;
using System.Timers;
using GameServerDB.UserManager;

namespace GameServerDB.MapsL
{
    public class CShot
    {
        public event ShotHandler Shot;
        public ShotEventArgs e = null;
        public delegate void ShotHandler(object x, ShotEventArgs e);
        double power = 0;
        double ang = 0;
        double[] vec;
        double ax = 0;
        double ay = 0;
        double x = 0;
        double y = 0;
        int look = 0;
        double xb = 0;
        double yb = 0;

        BitMapx ground;
        UserClass user;
        public CShot(BitMapx _bt)
        {
            ground = _bt;
        }
        public void SetShot(UserClass _user, double _ang, double _power, double _ax, double _ay, double _x, double _y, int _look)
        {
            ang = _ang;
            power = _power;
            ax = _ax;
            ay = _ay;
            x = _x - 23;
            y = _y - 24;
            xb = _x;
            yb = _y;
            vec = Vector(_ang, _power);
            look = _look;
            user = _user;
            e = null;
        }
        public void Start()
        {
            Update();
            
        }
        public void Update()
        {
            try
            {
                double[] dp;
                bool found = false;
                e = new ShotEventArgs();
                int tim = 0;
                for (int i = 0; i < 3000; i += 30)
                {
                    dp = GetPosAtTime(i);

                    if (ground.IsPixel((int)dp[0], (int)dp[1]) == true)
                    {
                        e.User = user;
                        e.angle = (int)ang;
                        e.cx = (int)dp[0];
                        e.cy = (int)dp[1];
                        e.look = look;
                        e.power = (int)power;
                        e.xb = (int)xb;
                        e.yb = (int)yb;
                        e.xf = (int)x;
                        e.yf = (int)y;
                        e.ax = (int)ax;
                        e.ay = (int)ay;
                        e.col = true;
                        e.time = i;
                        found = true;
                        Shot(this, e);
                        ground.AddGroundHole((int)dp[0], (int)dp[1], 36, 40);
                        break;
                    }
                    tim = i;
                }
                if (!found)
                {
                    e.User = user;
                    e.angle = (int)ang;
                    e.cx = 0;
                    e.cy = 0;
                    e.look = look;
                    e.power = (int)power;
                    e.xb = (int)xb;
                    e.yb = (int)yb;
                    e.xf = (int)x;
                    e.yf = (int)y;
                    e.ax = (int)ax;
                    e.ay = (int)ay;
                    e.col = false;
                    e.time = tim;
                    Shot(this, e);
                }
            }
            catch (Exception ex)
            {
                LogConsole.Show(LogType.ERROR, ex.ToString());
            }
        }
        private double[] GetPosAtTime(double a)
        {
            a /= 1E3;
            double[] p = new double[2];
            p[0] = (int)(x + vec[0] * a + ax * a * a / 2);
            p[1] = (int)(y + vec[1] * a + ay * a * a / 2);
            return p;
        }
        private double AngleToRad(double a)
        {
            return a * Math.PI / 180;
        }
        private double[] Vector(double a, double b)
        {
            double[] dp = new double[2];
            dp[0] = Math.Cos(AngleToRad(a)) * b;
            dp[1] = -Math.Sin(AngleToRad(a)) * b;
            return dp;
        }
    }

    public class ShotEventArgs : EventArgs
    {
        public UserClass User { set; get; }
        public int xb { set; get; }
        public int yb { set; get; }
        public int xf { set; get; }
        public int yf { set; get; }
        public int cx { set; get; }
        public int cy { set; get; }
        public int look { set; get; }
        public int angle { set; get; }
        public int power { set; get; }
        public int ax { set; get; }
        public int ay { set; get; }
        public int time { set; get; }

        public bool col { set; get; }
    }

    public class BitMapx
    {
        private Bitmap _bitdata;
        byte[] data_array;
        public int w, h;
        public BitMapx(Bitmap bt)
        {
            _bitdata = bt;
            w = bt.Width;
            h = bt.Height;
        }
        public void Displose()
        {
            _bitdata.Dispose();
        }
        public Bitmap Bitmap
        {
            get { return _bitdata; }
        }
        public int GetLeng()
        {
            return data_array.Length;
        }
        public int GetPix(int x)
        {
            return data_array[x];
        }
        public void Unlock()
        {
            Rectangle rect = new Rectangle(0, 0, _bitdata.Width, _bitdata.Height);
            System.Drawing.Imaging.BitmapData bmpData =
                _bitdata.LockBits(rect, System.Drawing.Imaging.ImageLockMode.ReadWrite,
                _bitdata.PixelFormat);

            IntPtr ptr = bmpData.Scan0;

            int bytes = _bitdata.Width * _bitdata.Height * 3;
            byte[] rgbValues = new byte[bytes];

            System.Runtime.InteropServices.Marshal.Copy(ptr, rgbValues, 0, bytes);
            data_array = rgbValues;
        }
        public bool IsPixel(int a, int b)
        {
            bool t = false;
            try
            {
                if (0 > a || a >= w || 0 > b || b >= h)
                {
                    t = false;
                }
                else
                {
                    int count = 4 * (b * w + a) + 3;
                    if (count <= this.data_array.Length)
                    {

                      int ddd = this.data_array[count];
                      if (0 < ddd)
                      {
                         t = true;
                      }
                    }
                }
                
            }
            catch (Exception ep)
            {
                LogConsole.Show(LogType.ERROR, ep.ToString());
            }
            
            return t;
        }
        public bool TestColl(int a, int b)
        {
            int index = (int)a * w + (int)b;

            if (index < 0 || index >= data_array.Length)
                return true;

            if (data_array[index] > 0)
                return true;

            return false;
        }
        public void AddGroundHole(int a, int b, int d, int c)
        {
            int e, f, j, k;
            int m = d * d;
            int o = c * c, h, n;
            bool p = true;
            for (e = a - d - 10; e <= a; e++)
            {
                p = !p;
                for (d = b - c - 10; d < b; d++)
                {
                    f = e - a;
                    j = d - b;
                    k = f * f / m + j * j / o;
                    if (!p && 1.2 > k)
                    {
                        p = !p;
                        h = e;
                        n = d;
                        j = b - j;
                        AddGroundShadowColumn(h, n, j);
                        if (0 != f && 1.2 <= k && p)
                        {
                            h = a - f;
                            AddGroundShadowColumn(h, n, j);
                            break;
                        }
                    }
                    else if (1 > k)
                    {
                        h = 2;
                        n = d;
                        j = b - j;
                        AddGroundHoleColumn(h, n, j);
                        if (0 != f)
                        {
                            h = a - f;
                            AddGroundHoleColumn(h, n, j);
                        }
                        break;
                    }
                }
            }
        }

        private void AddGroundHoleColumn(int a, int b, int d)
        {
            if (!(0 > a || a >= this.w))
            {
                if (0 > b)
                    b = 0;
                if (d >= this.h)
                    d = this.h - 1;

                if (!(d < b))
                {
                    for (int c = this.w, e = b; e <= d; e++)
                    {
                        b = 4 * (e * c + a);
                        try
                        {
                            data_array[b + 3] = 0;
                        }
                        catch { }
                    }
                }
            }
        }
        private void AddGroundShadowColumn(int a, int b, int d)
        {
            if (!(0 > a || a >= this.w))
            {
                if (0 > b)
                    b = 0;
                if (d >= this.h)
                    d = this.h - 1;
                if (!(d < b))
                {
                    for (int c = this.w, e = b; e <= d; e++)
                    {
                        b = 4 * (e * c + a);
                        try
                        {
                            data_array[b] /= 2;
                            data_array[b + 1] /= 2;
                            data_array[b + 2] /= 2;
                        }
                        catch { }
                    }
                }
            }
        }
    }

    public class LoadMaps
    {
        public static void Load()
        {
            LogConsole.Show(LogType.INFO, "Start LoadMaps!");
            string pathd = Program.PATH + "\\Data\\Maps\\";
            string[] filePaths = Directory.GetFiles(pathd, "*.png");
            foreach (string dd in filePaths)
            {
                Bitmap map_tmp = (Bitmap)Image.FromFile(dd);
                string ids = Path.GetFileName(dd).Replace("mapa","").Replace(".png","");
                maprw mapatm = new maprw();
                mapatm.id = int.Parse(ids);
                mapatm.w = map_tmp.Width;
                mapatm.h = map_tmp.Height;
                mapatm.ground = new BitMapx(map_tmp);
                Dictionary<int, Point> points = new Dictionary<int, Point> { };
                string[] lines = File.ReadAllLines(@pathd+"mapa"+ids+".txt");
                foreach (string line in lines)
                {
                    string[] sp1 = line.Split('=');
                    if (sp1[0] != "")
                    {
                        string idx = sp1[0].Replace(" ", "").Replace("loc", "");
                        string[] poins = sp1[1].Replace(" ", "").Split(',');
                        points.Add(int.Parse(idx), new Point(int.Parse(poins[0]), int.Parse(poins[1])));
                    }
                }
                mapatm.pos = points;
                mapatm.ground.Unlock();
                Program.RMaps.Add(mapatm);
                //map_tmp.Dispose();
                //points.Clear();
            }
            LogConsole.Show(LogType.INFO, "LoadMaps Complete!");
        }
    }
}
