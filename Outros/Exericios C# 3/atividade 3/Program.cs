using System;

public class Program
{
	public static void Main()
	{
		for (int i = 100; i <= 200; i++)
        {
			if (i % 2 != 0)
            {
				Thread.Sleep(50);
				Console.WriteLine(i);
            }
        }
		// Parar o programa. "Pressione qualquer tecla para continuar"
		Console.ReadKey();
	}
}