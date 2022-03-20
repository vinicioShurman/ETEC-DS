using System;

public class Program
{
	public static void Main()
	{
		// Declarando variavel
		double h, s;

		// Exibir menssagem ao usuario
		Console.Write("Digite sua altura(ex: 1,7): ");
		// Receber valor digitado pelo usuario
		h = double.Parse(Console.ReadLine());

		// Exibir menssagem ao usuario
		Console.Write("Sexo: \n " +
			"1. Masculino \n " +
			"2. Feminino \n ");
		s = double.Parse(Console.ReadLine());

		// Calcular

		switch (s)
		{
			case 1:
				Console.Write("Seu peso ideal é: " + ((72.7 * h) - 58));
				break;
			case 2:
				Console.Write("Seu peso ideal é: " + ((62.1 * h) - 44.7));
				break;
		}

		// Parar o programa. "Pressione qualquer tecla para continuar"
		Console.ReadKey();
	}
}