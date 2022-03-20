using System;

public class Program
{
	public static void Main()
	{
		// Declarando variavel
		int[] num = new int[3];

		// Exibir menssagem ao usuario 
		Console.Write("Digite um valor para a váriavel A: ");
		// Receber valor digitado pelo usuario
		num[0] = int.Parse(Console.ReadLine());

		// Exibir menssagem ao usuario
		Console.Write("Digite um valor para a váriavel B: ");
		// Receber valor digitado pelo usuario
		num[1] = int.Parse(Console.ReadLine());

		// Exibir menssagem ao usuario
		Console.Write("Digite um valor para a váriavel C: ");
		// Receber valor digitado pelo usuario
		num[2] = int.Parse(Console.ReadLine());

		// Calcular
		Array.Reverse(num);

		foreach (int i in num)
		{
			Console.Write(i + " ");
		}
		// Parar o programa. "Pressione qualquer tecla para continuar"
		Console.ReadKey();
	}
}