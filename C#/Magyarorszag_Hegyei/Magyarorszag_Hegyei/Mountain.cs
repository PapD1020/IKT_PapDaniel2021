using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Hegyek_OOP
{
    class Mountain
    {
        public String name { get; private set; } //get látható, azaz lekérdezni le lehet, settelni nem
        public String mountains { get; private set; }
        public int height { get; private set; }

        //public konstruktor létrehozása (így a Program.cs is fogja látni)
        public Mountain(string row)
        {
            string[] mountain_pieces = row.Split(';');

            this.name = mountain_pieces[0];
            this.mountains = mountain_pieces[1];
            this.height = Convert.ToInt32(mountain_pieces[2]);
        }
    }
}
