class Conta {
    constructor(numero, saldo = 0) {
        this.numero = numero,
        this.saldo = saldo;
    }

    sacar(valor) {
        if(this.saldo >= valor && valor > 0) {
            this.saldo -= valor;
        } else {
            console.log("Saldo insuficiente");
        }
    }

    depositar(valor) {
        if(valor > 0) {
            this.valor += valor;
        }
    }

    toString() {
        return `Numero: ${this.numero} - Saldo: ${this.saldo}`;
    }
}

//conta1 = new Conta(1001, 50);
//conta2 = new Conta(1002);

//conta1.depositar(300);
//conta2.depositar(500)

//console.log(conta1.toString()); //Irá aparecer a seguinte mensagem: Numero: 1002 - Saldo: 50}
//console.log(conta2.toString()); //Irá aparecer a seguinte mensagem: Numero: 1002 - Saldo: 0}