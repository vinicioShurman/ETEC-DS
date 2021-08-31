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
  bool comprar(Produto produto){
    bool retorno = false;
    if(produto.getQuantidadeEstoque => 1){
      this._quantidadeEstoque;
    }
  }
}
  
 
  
