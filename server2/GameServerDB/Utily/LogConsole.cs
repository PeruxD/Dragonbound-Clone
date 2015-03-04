using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Diagnostics;

namespace GameServerDB
{
    enum LogType: int
    {
        NORMAL = 0,
        ERROR  = 1,
        INFO   = 2,
        ALERT  = 3,
        DEBUG  = 4
    }
    enum LogColor: byte
    {
        NORMAL = 14,
        ERROR  = 15,
        INFO   = 6,
        ALERT  = 3,
        DEBUG  = 4
    }

    class LogConsole
    {
        public static void _Load()
        {
            Console.ForegroundColor = ConsoleColor.Magenta;
            Console.Title = "GameServer ";
            Console.WriteLine("");
            Console.WriteLine("");
            Console.WriteLine(@"                _____                               ______                        _   ");
            Console.WriteLine(@"               (____ \                             (____  \                      | |  ");
            Console.WriteLine(@"                _   \ \ ____ ____  ____  ___  ____  ____)  ) ___  _   _ ____   _ | |  ");
            Console.WriteLine(@"               | |   | / ___) _  |/ _  |/ _ \|  _ \|  __  ( / _ \| | | |  _ \ / || |  ");
            Console.WriteLine(@"               | |__/ / |  ( ( | ( ( | | |_| | | | | |__)  ) |_| | |_| | | | ( (_| |  ");
            Console.WriteLine(@"               |_____/|_|   \_||_|\_|| |\___/|_| |_|______/ \___/ \____|_| |_|\____|  ");
            Console.WriteLine(@"                                 (_____|                                              ");
            Console.WriteLine("");
            Console.WriteLine("");
            Console.ForegroundColor = ConsoleColor.Gray;
            Console.WindowWidth = Console.LargestWindowWidth - 25;
            Console.WindowHeight = Console.LargestWindowHeight - 25;
        }
        public static void Show(LogType type, string str)
        {
            Showb(type, str, new object[] { });
        }
        public static void Show(LogType type, string str, object arg0)
        {
            Showb(type, str, new object[] { arg0 });
        }
        public static void Show(LogType type, string str, object arg0, object arg1)
        {
            Showb(type, str, new object[] { arg0, arg1 });
        }
        public static void Show(LogType type, string str, object arg0, object arg1, object arg2)
        {
            Showb(type, str, new object[] { arg0, arg1, arg2 });
        }
        public static void Show(LogType type, string str, object arg0, object arg1, object arg2, object arg3)
        {
            Showb(type, str, new object[] { arg0, arg1, arg2, arg3 });
        }
        public static void Show(LogType type, string str, object arg0, object arg1, object arg2, object arg3, object arg4)
        {
            Showb(type, str, new object[] { arg0, arg1, arg2, arg3, arg4 });
        }
        public static void Showb(LogType type, string str, object[] args)
        {
            DateTime now = DateTime.Now;
            string[] shortDateString = new string[] { "[", now.ToLongTimeString(), "] " };
            switch (type)
            {
                case LogType.NORMAL:
                    {
                        Console.ForegroundColor = ConsoleColor.Gray;
                        Console.Write(string.Concat(shortDateString));
                        Console.Write("[");
                        StackFrame frame = (new StackTrace()).GetFrame(2);
                        Console.Write(string.Concat(frame.GetMethod().ReflectedType.Name, ".", frame.GetMethod().Name));
                        Console.Write("] » "); 
                        Console.ForegroundColor = (ConsoleColor)LogColor.NORMAL;
                        Console.Write(str, args);
                        Console.Write("\n");
                        Console.ForegroundColor = ConsoleColor.Gray;
                        break;
                    }
                case LogType.INFO:
                    {
                        Console.ForegroundColor = ConsoleColor.Gray;
                        Console.Write(string.Concat(shortDateString));
                        Console.Write("[");
                        Console.ForegroundColor = ConsoleColor.Yellow;
                        StackFrame frame = (new StackTrace()).GetFrame(2);
                        Console.Write(string.Concat(frame.GetMethod().ReflectedType.Name, ".", frame.GetMethod().Name));
                        Console.ForegroundColor = ConsoleColor.Gray;
                        Console.Write("] » "); 
                        Console.ForegroundColor = (ConsoleColor)LogColor.INFO;
                        Console.Write(str, args);
                        Console.Write("\n");
                        Console.ForegroundColor = ConsoleColor.Gray;
                        break;
                    }
                case LogType.ALERT:
                    {
                        Console.ForegroundColor = ConsoleColor.Gray;
                        Console.Write(string.Concat(shortDateString));
                        Console.Write("[");
                        Console.ForegroundColor = ConsoleColor.Yellow;
                        StackFrame frame = (new StackTrace()).GetFrame(2);
                        Console.Write(string.Concat(frame.GetMethod().ReflectedType.Name, ".", frame.GetMethod().Name));
                        Console.ForegroundColor = ConsoleColor.Gray;
                        Console.Write("] » "); 
                        Console.ForegroundColor = (ConsoleColor)LogColor.ALERT;
                        Console.Write(str, args);
                        Console.Write("\n");
                        Console.ForegroundColor = ConsoleColor.Gray;
                        Console.Beep();
                        break;
                    }
                case LogType.ERROR:
                    {
                        Console.ForegroundColor = ConsoleColor.Gray;
                        Console.Write(string.Concat(shortDateString));
                        Console.Write("[");
                        Console.ForegroundColor = ConsoleColor.Yellow;
                        StackFrame frame = (new StackTrace()).GetFrame(2);
                        Console.Write(string.Concat(frame.GetMethod().ReflectedType.Name, ".", frame.GetMethod().Name));
                        Console.ForegroundColor = ConsoleColor.Gray;
                        Console.Write("] » "); 
                        Console.ForegroundColor = (ConsoleColor)LogColor.ERROR;
                        Console.Write(str, args);
                        Console.Write("\n");
                        Console.ForegroundColor = ConsoleColor.Gray;
                        break;
                    }
                case LogType.DEBUG:
                    {
                        Console.ForegroundColor = ConsoleColor.Gray;
                        Console.Write(string.Concat(shortDateString));
                        Console.Write("[");
                        Console.ForegroundColor = ConsoleColor.Red;
                        StackFrame frame = (new StackTrace()).GetFrame(2);
                        Console.Write(string.Concat(frame.GetMethod().ReflectedType.Name, ".", frame.GetMethod().Name));
                        Console.ForegroundColor = ConsoleColor.Gray;
                        Console.Write("] » "); 
                        Console.ForegroundColor = (ConsoleColor)LogColor.DEBUG;
                        Console.Write(str, args);
                        Console.Write("\n");
                        Console.ForegroundColor = ConsoleColor.Gray;
                        break;
                    }
            }
        }

    }
    class LogDebugx
    {
        public static void HexDump(byte[] bytes, int bytesPerLine = 16)
        {
            if (bytes == null)
            {

            }
            else
            {

                int bytesLength = bytes.Length;

                char[] HexChars = "0123456789ABCDEF".ToCharArray();

                int firstHexColumn =
                      8                   // 8 characters for the address
                    + 3;                  // 3 spaces

                int firstCharColumn = firstHexColumn
                    + bytesPerLine * 3       // - 2 digit for the hexadecimal value and 1 space
                    + (bytesPerLine - 1) / 8 // - 1 extra space every 8 characters from the 9th
                    + 2;                  // 2 spaces 

                int lineLength = firstCharColumn
                    + bytesPerLine           // - characters to show the ascii value
                    + Environment.NewLine.Length; // Carriage return and line feed (should normally be 2)

                char[] line = (new String(' ', lineLength - 2) + Environment.NewLine).ToCharArray();
                int expectedLines = (bytesLength + bytesPerLine - 1) / bytesPerLine;
                StringBuilder result = new StringBuilder(expectedLines * lineLength);

                for (int i = 0; i < bytesLength; i += bytesPerLine)
                {
                    line[0] = HexChars[(i >> 28) & 0xF];
                    line[1] = HexChars[(i >> 24) & 0xF];
                    line[2] = HexChars[(i >> 20) & 0xF];
                    line[3] = HexChars[(i >> 16) & 0xF];
                    line[4] = HexChars[(i >> 12) & 0xF];
                    line[5] = HexChars[(i >> 8) & 0xF];
                    line[6] = HexChars[(i >> 4) & 0xF];
                    line[7] = HexChars[(i >> 0) & 0xF];

                    int hexColumn = firstHexColumn;
                    int charColumn = firstCharColumn;

                    for (int j = 0; j < bytesPerLine; j++)
                    {
                        if (j > 0 && (j & 7) == 0) hexColumn++;
                        if (i + j >= bytesLength)
                        {
                            line[hexColumn] = ' ';
                            line[hexColumn + 1] = ' ';
                            line[charColumn] = ' ';
                        }
                        else
                        {
                            byte b = bytes[i + j];
                            line[hexColumn] = HexChars[(b >> 4) & 0xF];
                            line[hexColumn + 1] = HexChars[b & 0xF];
                            line[charColumn] = (b < 32 ? '·' : (char)b);
                        }
                        hexColumn += 3;
                        charColumn++;
                    }
                    result.Append(line);
                }
                //return result.ToString();
                Console.WriteLine(result.ToString());
            }
        }
    }
}
