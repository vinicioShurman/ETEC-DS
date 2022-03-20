using System;

public class Program
{
	public static void Main()
	{
		// Declarando variavel
		int num1, num2, op;

		// Exibir menssagem ao usuario
		Console.Write("Digite um número: ");
		// Receber valor digitado pelo usuario
		num1 = Int16.Parse(Console.ReadLine());

		// Exibir menssagem ao usuario
		Console.Write("Digite outro número: ");
		// Receber valor digitado pelo usuario
		num2 = Int16.Parse(Console.ReadLine());

		// Exibir menssagem ao usuario
		Console.Write("Digite o número da operação desejada: \n " +
			"1. Adição \n " +
			"2. Subtração \n " +
			"3. Multiplicação \n " +
			"4. Divisão \n");
		// Receber valor digitado pelo usuario
		op = Int16.Parse(Console.ReadLine());

		// Calcular

		switch (op)
        {
			case 1:
				Console.Write("O resultado de adição é: " + (num1 + num2));
				break;
			case 2:
				Console.Write("O resultado de subtração é: " + (num1 - num2));
				break;
			case 3:
				Console.Write("O resultado de multiplicação é: " + (num1 * num2));
				break;
			case 4:
				Console.Write("O resultado de divisão é: " + (num1 / num2));
				break;
		}

		// Parar o programa. "Pressione qualquer tecla para continuar"
		Console.ReadKey();
	}
}