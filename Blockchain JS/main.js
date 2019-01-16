const SHA256 = require('crypto-js/sha256')

class Block {
    constructor(index, data, previusHash = ''){
        this.index = index;
        this.date = new Date();
        this.data = data;
        this.previusHash = previusHash;
        this.hash = this.createHash();
    }

    createHash() {
        return SHA256(this.index + this.date + this.data).toString();
    } 
}

class BlockChain {
    constructor(genesis){
        this.chain = [this.createFirstBlock(genesis)];
    }
    createFirstBlock(genesis){
        return new Block(0,genesis);
    }
    getLastBlock() {
        return this.chain[this.chain.length-1];
    }
    addBlock(data){
        let prevBlock = this.getLastBlock();
        let block = new Block(prevBlock.index+1, data, prevBlock.hash);
        this.chain.push(block);
    }
}


let mycoin = new BlockChain('Info de genesis');
mycoin.addBlock('me voy a forrar');
mycoin.addBlock('un yate para matias');

console.log(JSON.stringify(mycoin.chain,null,2));