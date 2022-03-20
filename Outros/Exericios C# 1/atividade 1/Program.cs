using System;

public class Program
{
	public static void Main()
	{
		// Declarando variavel
		double A, B, C;

		// Exibir menssagem ao usuario
		Console.Write("Digite um valor para a váriavel A: ");
		// Receber valor digitado pelo usuario
		A = double.Parse(Console.ReadLine());

		// Exibir menssagem ao usuario
		Console.Write("Digite um valor para B: ");
		// Receber valor digitado pelo usuario
		B = double.Parse(Console.ReadLine());

		// Calcular
		C = B;
		B = A;
		A = C;

		// Exibir mensagem ao usuario COM valor de variavel
		Console.Write("Os valores trocados são: A: " + A.ToString() + ", B: " + B.ToString());

		// Parar o programa. "Pressione qualquer tecla para continuar"
		Console.ReadKey();
	}
}