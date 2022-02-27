class Gato{
  String _nome, _raca, _cor;
  int _idade;
  
  Gato(this._nome, this._raca, this._cor, this._idade);
  
  //Set
  void setNome(String nome){
    this._nome = nome;
  }
  void setRaca(String raca){
    this._raca = raca;
  }
  void setCor(String cor){
    this._cor = cor;
  }
  void setIdade(int idade){
    this._idade = idade;
  }
  
  //Get
  String getNome(){
    return this._nome;
  }
  String getRaca(){
    return this._raca;
  }
  String getCor(){
    return this._cor;
  }
  int getIdade(){
    return this._idade;
  }
  
   //Metodos
  String miar(){
    return "$_nome está miando.";
  }
  String ronronar(){
    return "$_nome está ronronando.";
  }
  String dormir(){
    return "$_nome está dormindo.";
  }
  String comer(){
    return "$_nome está comendo.";
  }
  String fazerXixi(){
    return "$_nome está fazendo xixi.";
  }
  String fazerCoco(){
    return "$_nome está fazendo coco.";
  }
}


class Produto{
  String _nome, _codigoBarra;
  int _quantidadeEstoque = 0;
  double _precoVenda;
  
  Produto(this._nome, this._codigoBarra, this._quantidadeEstoque, this._precoVenda);
  
  //Set
  void setNome(String nome){
    this._nome = nome;
  }
  void setCodigoBarra(String codigoBarra){
    this._codigoBarra = codigoBarra;
  }
  void setQuantidadeEstoque(int quantidadeEstoque){
    this._quantidadeEstoque = quantidadeEstoque;
  }
  void setPrecoVenda(double precoVenda){
    this._precoVenda = precoVenda;
  }
  
  //Get
  String getNome(){
    return this._nome;
  }
  String getCodigoBarra(){
    return this._codigoBarra;
  }
  int getQuantidadeEstoque(){
    return this._quantidadeEstoque;
  }
  double getPrecoVenda(){
    return this._precoVenda;
  } 
  
  //Metodos
  bool comprar(int quantidade){
    bool retorno = false;
    if(quantidade > 0){
      this._quantidadeEstoque += quantidade;
      retorno = true;
    }
    return retorno; 
  }
  bool vender(int quantidade){
    bool retorno = false;
    if(quantidade > 0 && quantidade <= this._quantidadeEstoque){
      this._quantidadeEstoque -= quantidade;
      retorno = true;
    }
    return retorno;
  }
  String getValorEstoque(){
    String valorEstoque;
    valorEstoque =  (this._precoVenda * this._quantidadeEstoque).toString();
    return valorEstoque;
  }
  String toString(){
    return "Nome: $_nome Código de barra: $_codigoBarra Quantidade em estoque: $_quantidadeEstoque Preço de venda: $_precoVenda";
  }
  bool equals(Produto produto){
    bool retorno = false;
    if(this._codigoBarra == produto.getCodigoBarra() && this._precoVenda == produto.getPrecoVenda() && this._quantidadeEstoque == produto.getQuantidadeEstoque()){
      retorno = true;
    }
    return retorno;
  }
}

void main(){
  //Gatos
  Gato tom = new Gato('Tom', 'Persa', 'Cinza', 8);
  Gato simba = new Gato('Simba', 'Siamês', 'Preto', 7);
  Gato fred = new Gato('Fred', 'Ragdoll', 'Caramelo', 18);
  Gato mingau = new Gato('Mingau', 'Sphynx', 'Cinza', 6);
  Gato theo = new Gato('Theo', 'Persa', 'Caramelo', 3);
  Gato gato = new Gato('Gato', 'Ragdoll', 'Laranja', 1);
  
  print(tom.miar());
  print(simba.ronronar());
  print(fred.dormir());
  print(mingau.comer());
  print(theo.fazerXixi());
  print(gato.fazerCoco());
  
  //Produtos
  Produto arroz = new Produto('Arroz Bentinho', '40821498', 30, 100);
  Produto feijao = new Produto('Feijão Bentinho', '41235637', 15, 80);
  
  print(arroz.comprar(6));
  print(arroz.vender(3));
  print(arroz.getValorEstoque());
  print(arroz.toString());
  print(arroz.equals(feijao));
}
  
 
  
