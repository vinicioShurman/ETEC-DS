using System;

public class Program
{
	public static void Main()
	{
		// Declarando variavel
		int A;

		// Exibir menssagem ao usuario
		Console.Write("Digite um valor para a váriavel A: ");

		// Receber valor digitado pelo usuario
		A = int.Parse(Console.ReadLine());

		// Calcular
		if (A >= 0)
		{
			Console.Write("O modulo da váriavel A é: " + A.ToString());
		}
		else
		{
			A = A * (-1);
			Console.Write("O modulo da váriavel A é: " + A.ToString());
		}

		// Parar o programa. "Pressione qualquer tecla para continuar"
		Console.ReadKey();
	}
}