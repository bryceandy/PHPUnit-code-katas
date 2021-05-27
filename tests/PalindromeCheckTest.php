<?php

use App\Palindrome;
use PHPUnit\Framework\TestCase;

class PalindromeCheckTest extends TestCase
{
    /**
     * @dataProvider strings
     *
     * @param $string
     * @param $result
     *
     * @test
     */
    public function it_checks_for_a_valid_palindrome_string($string, $result)
    {
        $this->assertEquals($result, (new Palindrome)->check($string));
    }

    public function strings(): array
    {
        return [
            ['zdsptawefecbickktjoeeojtkkcibcefewatpsdz', true],
            ['ab71ba', false],
            ['ksswieohzzonjqosouzbnthoqfktlhokcblmleilmrbxvldvodyhuzknirkdlexrprgqbznnwypsjowrjyteosbhqflkvyfshhgzchhchyeeasbopifwhsusjvxsvlxtchrxzywptdljywcqykstepgzufvcxphtjsnxeveuqybmifdbpnwwruqgyzbltubkjzvxhpsuusphxvzjkbutlbzygqurwwnpbdfimbyquevexnsjthpxcvfuzgpetskyqcwyjldtpwyzxrhctxlvsxvjsushwfipobsaeeyhchhczghhsfyvklfqhbsoetyjrwojspywnnzbqgrprxeldkrinkzuhydovdlvxbrmlielmlbckohltkfqohtnbzuosoqjnozzhoeiwssk', true],
            ['sxwghmtxvzpzmxejczaqufqmibscltvbzouuordogclpqywzgyfulfpzuzwvkhhfitozydwjjoacdxfspbakpnltunrrgzffzcjxsxwghmtxvzpzmxejczaqufqmibscltvbzouuordogclpqywzgyfulfpzuzwvkhhfitozydwjjoacdxfspbakpnltunrrgzffzcjx', false],
        ];
    }
}
