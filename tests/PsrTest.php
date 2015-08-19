<?php

namespace PSR;

class PsrTest
{
  public function multilineDeclaration(
    $parameterOne,
    $parameterTwo
  ) {
    $array = [
      'itemOne',
      'itemTwo'
    ];
  }

  public function multilineCaller()
  {
    $this->multilineTest(
      'parameterOne',
      'parameterTwo'
    );
  }

  public function mutltilineConditional()
  {
    return true &&
      false ||
      true;
  }

  public function multilineSwitch()
  {
    switch('one') {
      case 'one':
        return true;
      case 'two':
        return false;
    }
  }
}
