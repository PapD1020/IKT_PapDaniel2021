using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AutokereskedesGUI
{
    public class Auto
    {
        public string marka;
        public int tipus;
        public int gyartas_eve;
        public string szin;
        public string rendszam;

        public Auto()
        {

        }

        public Auto(string marka, int tipus, int gyartas_eve, string szin, string rendszam)
        {
            this.marka = marka;
            this.tipus = tipus;
            this.gyartas_eve = gyartas_eve;
            this.szin = szin;
            this.rendszam = rendszam;
        }
    }
}
