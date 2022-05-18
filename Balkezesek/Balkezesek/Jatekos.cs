using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Balkezesek
{
    internal class Jatekos
    {
        public string nev { get; set; }

        public string elso { get; set; }

        public string utolso { get; set; }

        public double suly { get; set; }

        public double magassag { get; set; }

        public static double InchToCm(double x)
        {
            return Math.Round(x * 2.54);
        }

        public Jatekos(string sor)
        {
            string[] jatekosDarabok = sor.Split(';');

            nev = jatekosDarabok[0];
            elso = jatekosDarabok[1];
            utolso = jatekosDarabok[2];
            suly = double.Parse(jatekosDarabok[3]);
            magassag = double.Parse(jatekosDarabok[4]);
        }
    }
}
