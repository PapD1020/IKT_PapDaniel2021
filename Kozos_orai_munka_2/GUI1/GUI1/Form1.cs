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

namespace GUI1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void openToolStripMenuItem_Click(object sender, EventArgs e)
        {
            OpenFileDialog o = new OpenFileDialog();
            o.ShowDialog();
            filename = o.FileName;
            StreamReader sr = new StreamReader(filename);
            while (!sr.EndOfStream)
            {
                listBox1.Items.Add(sr.ReadLine());
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            try
            {
                int a = Convert.ToInt32(textBox1.Text);
                int b = Convert.ToInt32(textBox2.Text);
                int sum = a + b;
                listBox1.Items.Add(sum);
            }
            catch (Exception error)
            {
                MessageBox.Show(error.Message);
            }
        }

        string filename = "";
        private void saveToolStripMenuItem_Click(object sender, EventArgs e)
        {
            try
            {
                if (filename != "")
                {
                    kiir();
                }
            }
            catch (Exception)
            {
                MessageBox.Show("Még nincs fájl kiválasztva!");
            }
           
        }

        private void saveAsToolStripMenuItem_Click(object sender, EventArgs e)
        {
            try
            {
                    if(listBox1.Items.Count != 0)
                    {
                        kiir();
                    }
                    else
                    {
                        DialogResult dialogResult = MessageBox.Show("Üres a listbox! \n Szeretné menteni?", "Warning!", MessageBoxButtons.YesNo);
                        if(dialogResult == DialogResult.Yes)
                        {
                            kiir();
                        }
         
                    }
            }
            catch (Exception error)
            {
                MessageBox.Show(error.Message);
            }
        }

        void kiir()
        {
            SaveFileDialog s = new SaveFileDialog();
            s.ShowDialog();
            filename = s.FileName;

            StreamWriter sw = new StreamWriter(filename);
            foreach (var item in listBox1.Items)
            {
                sw.WriteLine(item);
            }
            sw.Close();
        }
    }
}
