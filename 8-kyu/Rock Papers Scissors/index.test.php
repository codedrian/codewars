<?php
/* cSpell: disable */
class rpcTest extends TestCase
{
    private function dotest($p1, $p2, $exp)
    {
        $actual = rpc($p1, $p2);
        //echo $exp == $actual;
        $this->assertSame($exp, $actual);
    }

    public function testrpcBasics()
    {
        $this->dotest("rock", "scissors", "Player 1 won!");
        $this->dotest("scissors", "rock", "Player 2 won!");
        $this->dotest("scissors", "scissors", "Draw!");
    }
}
