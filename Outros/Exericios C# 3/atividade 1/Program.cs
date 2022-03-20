using System;

public class Program
{
	public static void Main()
	{
		// Declarando variavel
		int[] num = new int[100];
		int count;

		// Calcular
		count = 1;
		while (count <= 100) {
			num[count - 1] = count;
			count++;
        }

		Array.Reverse(num);

		foreach (int i in num)
		{
			Thread.Sleep(50);
			Console.Write(i + "\n");
		}

		// Parar o programa. "Pressione qualquer tecla para continuar"
		Console.ReadKey();
	}
}