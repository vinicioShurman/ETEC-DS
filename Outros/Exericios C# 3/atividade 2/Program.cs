using System;

public class Program
{
	public static void Main()
	{
		// Declarando variavel
		int[] num;
		int fac;
		int count;

		// Exibir menssagem ao usuario
		Console.Write("Quantidade de números a serem processados: ");
		// Receber valor digitado pelo usuario
		num = new int [Int16.Parse(Console.ReadLine())];

		// Receber valores
		count = 1;
		while (count <= num.Length)
		{
			// Exibir menssagem ao usuario
			Console.Write("Digite os números a serem processados: ");
			// Receber valor digitado pelo usuario
			num[count - 1] = Int32.Parse(Console.ReadLine());
			count++;
		}

		count = 0;
		// Calcular
		foreach (int i in num)
		{
			while (count < num.Length)
			{
				Thread.Sleep(50);
				fac = 1; 
				for (int j = 1; j <= num[count]; j++) {
				fac *= j;
				}
				Console.WriteLine("\nO fatorial de {0}! é: {1}\n", num[count], fac);
				count++;
			}
			
		}

		// Parar o programa. "Pressione qualquer tecla para continuar"
		Console.ReadKey();
	}
}