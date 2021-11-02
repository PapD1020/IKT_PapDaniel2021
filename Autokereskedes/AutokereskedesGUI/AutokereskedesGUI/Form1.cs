using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.IO;

namespace AutokereskedesGUI
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        List<Auto> autoList = new List<Auto>();
        private void button3_Click(object sender, EventArgs e)
        {
            Auto auto = new Auto();
            auto.marka = textBox1.Text;
            auto.tipus = Convert.ToInt32(textBox2.Text);
            auto.gyartas_eve = Convert.ToInt32(textBox3.Text);
            auto.szin = textBox4.Text;
            auto.rendszam = textBox5.Text;

            //csak a rendszámot kell ellenőrizni
            string[] autoAdatTomb;
            string autoItem = "";
            bool vane = false;

            foreach (var item in listBox1.Items)
            {
                autoItem = item.ToString();
                autoAdatTomb = autoItem.Split(';');
                if(textBox5.Text == autoAdatTomb[4])
                {
                    vane = true;
                }
            }

            if(vane == true)
            {
                MessageBox.Show("Már létezik ilyen autó");
            }
            else
            {
                listBox1.Items.Add(auto.marka);
            }

        }

        private void megnyitásToolStripMenuItem_Click(object sender, EventArgs e)
        {
            OpenFileDialog o = new OpenFileDialog();
            string filename = o.FileName;
            listBox1.Items.Clear();
            StreamReader sr = new StreamReader(filename);
            while (!sr.EndOfStream)
            {
                listBox1.Items.Add(sr.ReadLine());
            }
        }

        private void button4_Click(object sender, EventArgs e)
        {

        }
    }
}
