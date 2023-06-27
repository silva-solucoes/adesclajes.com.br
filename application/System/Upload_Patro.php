<?php 

class Upload_Patro {
    private $diretorio;
    private $arquivo;
    private $tamanho;
    private $resultado;
    private $erro;
    private $nome;
    private $logoCount;

    public function getResultado(): string {
        return $this->resultado;
    }

    public function getErro(): string {
        return $this->erro;
    }

    public function __construct(string $diretorio = null) {
        $this->diretorio = $diretorio ?? 'images/patrocinadores/';

        if (!file_exists($this->diretorio) && !is_dir($this->diretorio)) {
            mkdir($this->diretorio, 0777);
        }

        $this->logoCount = 1;
    }

    public function imagem(array $imagem, string $nome = null, int $tamanho = null) {
        $this->arquivo = $imagem;
        $this->nome = $nome ?? pathinfo($this->arquivo['name'], PATHINFO_FILENAME);
        $this->tamanho = $tamanho ?? 1;

        $extensao = pathinfo($this->arquivo['name'], PATHINFO_EXTENSION);

        $extensoesValidas = ['png', 'jpg', 'jpeg', 'webp'];
        $tiposValidos = ['image/png', 'image/jpg', 'image/jpeg', 'image/webp'];

        if (!in_array($extensao, $extensoesValidas)) {
            $this->erro = 'A extensão não é permitida';
            $this->resultado = false;
        } elseif (!in_array($this->arquivo['type'], $tiposValidos)) {
            $this->erro = 'Tipo inválido';
            $this->resultado = false;
        } elseif ($this->arquivo['size'] > $this->tamanho * (1024 * 1024)) {
            $this->erro = 'Arquivo muito grande';
            $this->resultado = false;
        } else {
            $this->renomearArquivo();
            $this->moverArquivo();
        }
    }

    private function redimensionarImagem($caminhoImagem) {
        // Carregar a imagem original
        $imagemOriginal = imagecreatefromstring(file_get_contents($caminhoImagem));

        // Obter as dimensões da imagem original
        $larguraOriginal = imagesx($imagemOriginal);
        $alturaOriginal = imagesy($imagemOriginal);

        // Calcular as novas dimensões
        $novaLargura = 200;
        $novaAltura = 87;

        // Criar uma nova imagem vazia com as dimensões desejadas
        $imagemRedimensionada = imagecreatetruecolor($novaLargura, $novaAltura);

        // Redimensionar a imagem original para a nova imagem
        imagecopyresampled($imagemRedimensionada, $imagemOriginal, 0, 0, 0, 0, $novaLargura, $novaAltura, $larguraOriginal, $alturaOriginal);

        // Salvar a imagem redimensionada
        imagepng($imagemRedimensionada, $caminhoImagem);

        // Liberar a memória utilizada pelas imagens
        imagedestroy($imagemOriginal);
        imagedestroy($imagemRedimensionada);
    }

    public function converterParaWebP() {
        $caminhoImagem = $this->diretorio . DIRECTORY_SEPARATOR . $this->nome;

        // Verificar se o arquivo existe e é uma imagem
        if (file_exists($caminhoImagem) && $this->isImagem($caminhoImagem)) {
            // Criar uma nova imagem a partir do arquivo existente
            $imagem = imagecreatefromstring(file_get_contents($caminhoImagem));

            // Definir a qualidade da imagem webp (opcional)
            $qualidade = 80;

            // Gerar o novo nome da imagem com a extensão webp
            $novoNome = $this->trocarExtensao($this->nome, 'webp');

            // Caminho para salvar a nova imagem
            $caminhoWebp = $this->diretorio . DIRECTORY_SEPARATOR . $novoNome;

            // Converter e salvar a imagem como webp
            imagewebp($imagem, $caminhoWebp, $qualidade);

            // Atualizar o nome do arquivo com a extensão webp
            $this->nome = $novoNome;

            // Liberar a memória da imagem
            imagedestroy($imagem);

            // Remover o arquivo original
            unlink($caminhoImagem);

            // Atualizar o resultado
            $this->resultado = $this->nome;
        } else {
            $this->erro = 'Arquivo de imagem inválido';
            $this->resultado = false;
        }
    }

    private function isImagem($caminho) {
        $mime = mime_content_type($caminho);
        return strpos($mime, 'image') === 0;
    }

    private function trocarExtensao($nomeArquivo, $novaExtensao) {
        $nomeSemExtensao = pathinfo($nomeArquivo, PATHINFO_FILENAME);
        return $nomeSemExtensao . '.' . $novaExtensao;
    }

    private function renomearArquivo() {
        $extensao = pathinfo($this->arquivo['name'], PATHINFO_EXTENSION);
        $nomeArquivo = 'client-' . $this->pad($this->logoCount, 2) . '.' . $extensao;

        if (file_exists($this->diretorio . $nomeArquivo)) {
            $this->logoCount++;
            $this->renomearArquivo();
        } else {
            $this->nome = $nomeArquivo;
            $this->logoCount++;
        }
    }

    private function moverArquivo() {
        $caminhoImagem = $this->diretorio . DIRECTORY_SEPARATOR . $this->nome;
        if (move_uploaded_file($this->arquivo['tmp_name'], $this->diretorio . DIRECTORY_SEPARATOR . $this->nome)) {
            $this->redimensionarImagem($caminhoImagem);
            $this->converterParaWebP(); // Adicionado para converter para webp após o redimensionamento
            $this->resultado = $this->nome;
        } else {
            $this->resultado = false;
            $this->erro = 'Erro ao mover arquivo!';
        }
    }

    private function pad($number, $length) {
        $str = '' . $number;
        while (strlen($str) < $length) {
            $str = '0' . $str;
        }
        return $str;
    }
}

?>