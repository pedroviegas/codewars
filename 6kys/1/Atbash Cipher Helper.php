/**
  * Project: Atbash Cipher Helper
  * By: viegas_pedro
  */
  <?php
  class AtbashCipher {
    private $map;
    private $revmap;
    public function __construct($alphabet) {
      $chars = preg_split('//u', $alphabet, -1, PREG_SPLIT_NO_EMPTY);
      $this->map = array_combine($chars, array_reverse($chars));
      $this->revmap = array_flip($this->map);
    }
    public function encode($s) {
      return strtr($s, $this->map);
    }
    public function decode($s) {
      return strtr($s, $this->revmap);
    }
  }