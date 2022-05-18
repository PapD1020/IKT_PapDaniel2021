using System;
using System.Collections.Generic;
using System.IO;

namespace Balkezesek
{
    internal class Program
    {

        static void Main(string[] args)
        {
            List<Jatekos> jatekosLista = new List<Jatekos>();

            StreamReader streamReader = new StreamReader("balkezesek.csv");

            streamReader.ReadLine();

            while (!streamReader.EndOfStream)
            {
                jatekosLista.Add(new Jatekos(streamReader.ReadLine()));
            }

            streamReader.Close();

            //Próba kiíratás
            foreach (var item in jatekosLista)
            {
                Console.WriteLine(item.nev + " " + item.elso + " " + item.utolso + " " + item.suly + " " + Jatekos.InchToCm(item.magassag));
            }

            Console.ReadKey();
        }
    }
}
