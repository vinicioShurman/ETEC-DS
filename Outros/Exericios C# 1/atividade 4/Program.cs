using System;

public class Program
{
	public static void Main()
	{
		// Declarando variavel
		int[] num = new int[2];
		int A;

		// Exibir menssagem ao usuario
		Console.Write("Digite um valor para a váriavel A: ");
		// Receber valor digitado pelo usuario
		num[0] = int.Parse(Console.ReadLine());

		// Exibir menssagem ao usuario
		Console.Write("Digite um valor para a váriavel B: ");
		// Receber valor digitado pelo usuario
		num[1] = int.Parse(Console.ReadLine());

		// Calcular
		Array.Reverse(num);
		A = num[0] - num[1];

		// Exibir mensagem ao usuario
		Console.Write("A diferença é de: " + A.ToString());

		// Parar o programa. "Pressione qualquer tecla para continuar"
		Console.ReadKey();
	}
}