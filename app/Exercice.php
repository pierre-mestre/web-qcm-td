<?php
namespace App;

class Exercice
{
    public function __construct(int $exerciceNumber)
    {
        $this->exerciceBaseDir = dirname(__DIR__).'/exercice/';
        $this->exerciceName = 'exercice'.$exerciceNumber.'.php';
    }

    public function run() : string
    {
        $args = func_get_args();
        if (count($args) === 0) {
            throw new \RuntimeException('At least one argument is required to run exercice.');
        }

        if (!file_exists($this->exerciceBaseDir.$this->exerciceName)) {
            throw new \RuntimeException("Exercice {$exerciceName} not found in exercice/ directory.");
        }

        $result = '';
        try {
            ob_start();
            include $this->exerciceBaseDir.$this->exerciceName;
            $result = ob_get_clean();
        } catch (\Throwable $e) {
            throw $e;
        }
        return $result;
    }
}
