import 'package:flutter/material.dart';
import 'package:http/http.dart';
import 'dart:convert';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
        title: 'Bem vindo ao Flutter',
        home: Scaffold(
            appBar: AppBar(
              title: Text('Bem vindo ao Flutter'),
            ),
            body: CepWidget()));
  }
}

class CepWidget extends StatefulWidget {
  @override
  _CepWidgetState createState() => _CepWidgetState();
}

class _CepWidgetState extends State<CepWidget> {
  var _controller = TextEditingController(text: '');
  String _cep = 'Insira um Cep';
  String _rua = '';
  String _complemento = '';
  String _bairro = '';
  String _cidade = '';
  String _estado = '';
  @override
  Widget build(BuildContext context) {
    return Container(
      child: Column(children: <Widget>[
        RaisedButton(
          onPressed: onButtonPressCep,
          child: const Text('Consultar', style: TextStyle(fontSize: 20)),
        ),
        Text('$_cep'),
        TextField(
          decoration: const InputDecoration(
            hintText: 'Nome',
          ),
        ),
        TextField(
          controller: _controller,
          decoration: const InputDecoration(
            hintText: 'CEP',
          ),
        ),
        TextField(
          decoration: const InputDecoration(
            hintText: 'Endereço',
          ),
        ),
        TextField(
          decoration: const InputDecoration(
            hintText: 'Número',
          ),
        ),
        TextField(
          decoration: const InputDecoration(
            hintText: 'Complemento',
          ),
        ),
        Text('$_rua'),
        Text('$_complemento'),
        Text('$_bairro'),
        Text('$_cidade'),
        Text('$_estado'),
      ]),
    );
  }

  onButtonPressCep() async {
    String url = 'https://viacep.com.br/ws/${_controller.text}/json/';
    Response response = await get(url);
    String content = response.body;
    if (response.statusCode == 200) {
      print('Response body : ${content}');
      try {
        final parsed = jsonDecode(content).cast<String, dynamic>();
        setState(() {
          _rua = parsed["logradouro"];
          _complemento = parsed["complemento"];
          _bairro = parsed["bairro"];
          _cidade = parsed["localidade"];
          _estado = parsed["uf"];
        });
      } catch (Ex) {
        print("Erro ao decodificar JSON : $Ex");
      }
    }
  }
}
