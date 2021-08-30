//Transforma graus célcius em fahrenheit
double toFahrenheit(double celsius) {
  double returnFahrenheit = 0;
  returnFahrenheit = (celsius * 9 / 5) + 32;
  return returnFahrenheit;
}

//Verifica se o numero desejado é primo ou não
bool isItPrime(int pNumber) {
  bool returnPrime = true;
  if (pNumber != 0 && pNumber != 1) {
    for (int i = 2; i < pNumber; i++) {
      if (pNumber % i == 0) {
        returnPrime = false;
      }
    }
  }
  return returnPrime;
}

//Calcula todos os divisores do numero desejado
String divNumber(int dNumber) {
  String returnDivisors = "1, ";
  for (int i = 2; i <= dNumber; i++) {
    if (dNumber % i == 0) {
      //toString transforma o numero int em String
      returnDivisors += i.toString();
      if (i < dNumber) {
        returnDivisors += ", ";
      } else {
        returnDivisors += ";";
      }
    }
  }
  return returnDivisors;
}

//Calcula o IMC do individuo
double calcIMC(double height, double weight) {
  double returnIMC = 0;
  returnIMC = weight / (height * height);
  return returnIMC;
}

void main() {
  print(toFahrenheit(23.4));
  print(isItPrime(10));
  print(divNumber(431231));
  //.toStringAsFixed remove numeros depois da virgula. "()" define quantos numeros terão depois da virgula
  print((calcIMC(1.90, 73)).toStringAsFixed(1));
}