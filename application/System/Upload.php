<?php 

Class Upload{

    private $diretorio;
    private $arquivo;
    private $tamanho;
    private $resultado;
    private $erro;
    private $nome;

    public function getResultado() :string {
        return $this->resultado;
    }

    public function getErro() :string {
        return $this->erro;
    }

    public function __construct(string $diretorio = null){
       
        $this->diretorio = $diretorio ?? 'uploads/adms/';
       
        if(!file_exists($this->diretorio) && !is_dir($this->diretorio)):
            mkdir($this->diretorio, 0777);
        endif;
    }
    public function imagem(array $imagem, string $nome = null, int $tamanho = null){
        $this->arquivo = $imagem;
        $this->nome = $nome ?? pathinfo($this->arquivo['name'], PATHINFO_FILENAME);
        $this->tamanho = $tamanho ?? 1;

        $extensao = pathinfo($this->arquivo['name'], PATHINFO_EXTENSION);

        $extensoesValidas = ['png', 'jpg', 'jpeg', 'webp'];
        $tiposValidos = ['image/png', 'image/jpg', 'image/jpeg', 'image/webp'];

        if(!in_array($extensao, $extensoesValidas)):
            $this->erro = 'A extensão não é permitida';
            $this->resultado = false;
        elseif(!in_array($this->arquivo['type'],$tiposValidos)):
            $this->erro = 'Tipo inválido';
            $this->resultado = false;
        elseif($this->arquivo['size'] > $this->tamanho * (1024*1024)):
            $this->erro = 'Arquivo muito grande';
            $this->resultado = false;
        else:
            $this->renomearArquivo();
            $this->moverArquivo();
        endif;
    }

    private function renomearArquivo(){
        $arquivo = $this->nome.strrchr($this->arquivo['name'], '.');
        if(file_exists($this->diretorio.DIRECTORY_SEPARATOR.$arquivo)):
            $arquivo = $this->nome.'-'. uniqid().strrchr($this->arquivo['name'], '.');
        endif;
        $this->nome = $arquivo;
    }

    private function moverArquivo(){
        if(move_uploaded_file($this->arquivo['tmp_name'], $this->diretorio.DIRECTORY_SEPARATOR.$this->nome)):
            $this->resultado = $this->nome;
        else:
            $this->resultado = false;
            $this->erro = 'Erro ao mover arquivo!';
        endif;
    }

}

?>