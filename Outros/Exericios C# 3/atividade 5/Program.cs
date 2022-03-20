using System;

public class Program
{

    public static void Main()
    {
        int resultado, count = 1, x, y;
        Console.Write("Exemplo:\nx * y = z\n\n");
        // Exibir menssagem ao usuario
        Console.Write("Defina o valor final do 'x': ");
        // Receber valor digitado pelo usuario
        x = Int16.Parse(Console.ReadLine());

        Console.Write("Defina o valor final do 'y': ");
        // Receber valor digitado pelo usuario
        y = Int16.Parse(Console.ReadLine());

        // Tabuada
        while (count <= x)
        {
            Thread.Sleep(500);
            Console.WriteLine("Tabuado do " + count + ":");
            for (int i = 0; i <= y; i++)
            {
                resultado = count * i;
                Console.WriteLine(count + " x " + i + " = " + resultado);
            }
            Console.WriteLine("\n");
            count += 1;
        }
        // Parar o programa. "Pressione qualquer tecla para continuar"
        Console.ReadKey();
    }
}