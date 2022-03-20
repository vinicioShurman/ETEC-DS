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
			"1. Multiplo? \n " +
			"2. Pares? \n " +
			"3. Média maior que 7? \n " +
			"4. Sair \n");
		// Receber valor digitado pelo usuario
		op = Int16.Parse(Console.ReadLine());

		// Calcular

		switch (op)
		{
			case 1:
				if (num1 % num2 == 0)
                {
					Console.Write("O numero " + num1 + " é multiplo de " + num2);
					break;
                }
                else
                {
					Console.Write("O numero " + num1 + " não é multiplo de " + num2);
				}
				break;
			case 2:
				if (num1 % 2 == 0 && num2 % 2 == 0)
				{
					Console.Write("Os numeros " + num1 + " e " + num2 + " são pares" );
					break;
				}
				else
				{
					Console.Write("Os numeros " + num1 + " e " + num2 + " não são pares");
				}
				break;
			case 3:
				if ((num1 + num2) / 2 >= 7)
				{
					Console.Write("A média dos números " + num1 + " e " + num2 + " é maior ou igual que 7");
					break;
				}
				else
				{
					Console.Write("A média dos números " + num1 + " e " + num2 + " não é maior ou igual que 7");
				}
				break;
			case 4:
				break;
		}

		// Parar o programa. "Pressione qualquer tecla para continuar"
		Console.ReadKey();
	}
}