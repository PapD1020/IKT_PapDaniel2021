using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace Hegyek_OOP
{
    class Program
    {
        static void Main(string[] args)
        {
            List<Mountain> mountains_list = new List<Mountain>();

            StreamReader sr = new StreamReader("HegyekMo.txt");
            sr.ReadLine(); //Ezáltal már a második soron állunk
            //Peek() ha -1, akkor már nincs következő sor
            while (sr.Peek() > -1)
            {
                mountains_list.Add(new Mountain(sr.ReadLine()));
            }

            //próba
            Console.WriteLine(mountains_list[0].name + " " + mountains_list[0].height);

            //3. feladat - hegycsúcsok száma
            Console.WriteLine("3. feladat: Hegycsúcsok száma: " + mountains_list.Count + " db");

            //4. feladat - átlag
            double sum = 0;
            foreach(var item in mountains_list)
            {
                sum = sum + item.height;
            }

            Console.WriteLine("4. feladat: Hegycsúcsok átlagos magassága: " + sum / mountains_list.Count);

            //5. feladat - legmagasabb hely adatai (min, max)
            int max = mountains_list[0].height;
            int id = 0;
            for (int i = 1; i < mountains_list.Count; i++)
            {
                if(mountains_list[i].height > max)
                {
                    max = mountains_list[i].height;
                    id = i;
                }
            }

            Console.WriteLine("5. feladat: " + mountains_list[id].name + " " + mountains_list[id].mountains + " " + mountains_list[id].height);

            //6. feladat - magasság érték bekérése, van-e magasabb hegycsúcs, első találat után álljon meg a ciklus
            Console.WriteLine("Kérek egy egész számot");
            int h;
            h = int.Parse(Console.ReadLine());
            bool exists = false;

            foreach (var item in mountains_list)
            {
                if (item.height > h)
                {
                    exists = true;
                    break;
                }
            }

            if (exists)
            {
                Console.WriteLine("6. feladat: Van magasabb csúcs");
            }
            Console.ReadKey();
        }
    }
}
