using System;

public class Program
{
	public static void Main()
	{
		// Declarando variavel
		int[] num = new int[4];
		int med, rec, sum;

		// Exibir menssagem ao usuario
		Console.Write("Digite um valor para a nota 1: ");
		// Receber valor digitado pelo usuario
		num[0] = int.Parse(Console.ReadLine());

		// Exibir menssagem ao usuario
		Console.Write("Digite um valor para a nota 2: ");
		// Receber valor digitado pelo usuario
		num[1] = int.Parse(Console.ReadLine());

		// Exibir menssagem ao usuario
		Console.Write("Digite um valor para a nota 3: ");
		// Receber valor digitado pelo usuario
		num[2] = int.Parse(Console.ReadLine());

		// Exibir menssagem ao usuario
		Console.Write("Digite um valor para a nota 4: ");
		// Receber valor digitado pelo usuario
		num[3] = int.Parse(Console.ReadLine());

		// Calcular
		sum = num.Sum();
		med = sum / 4;

		if (med >= 7)
		{
			Console.Write("Aluno aprovado");
		}
		else
		{
			// Exibir menssagem ao usuario
			Console.Write("Aluno de recuperação. Digite um valor para a nota de recuperação:");
			// Receber valor digitado pelo usuario
			rec = int.Parse(Console.ReadLine());

			med = (sum + rec) / 4;

			if (med >= 7)
			{
				Console.Write("Aluno aprovado na recuperação");
			}
			else
			{
				Console.Write("Aluno não aprovado na recuperação com a nota de: " + med.ToString());
			}
		}

		// Parar o programa. "Pressione qualquer tecla para continuar"
		Console.ReadKey();
	}
}