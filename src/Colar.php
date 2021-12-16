<?php

/**
 * @package   colar/colar
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

declare(strict_types = 1);

namespace Colar\Colar;

use OutOfBoundsException;

/**
 * Provides colar values.
 *
 * @see https://ferdychristant.com/color-for-the-color-challenged-884c7aa04a56 Original article introducing colar.
 */
enum Colar: string
{
    case BLUE   = 'blue';
    case BROWN  = 'brown';
    case CAMO   = 'camo';
    case CHOCO  = 'choco';
    case CYAN   = 'cyan';
    case GRAY   = 'gray';
    case GREEN  = 'green';
    case INDIGO = 'indigo';
    case JUNGLE = 'jungle';
    case LIME   = 'lime';
    case ORANGE = 'orange';
    case PINK   = 'pink';
    case PURPLE = 'purple';
    case RED    = 'red';
    case SAND   = 'sand';
    case TEAL   = 'teal';
    case VIOLET = 'violet';
    case YELLOW = 'yellow';

    /** @var array<string, array<int, string>> Array of colar values. */
    public const VALUE = [
        'blue' => [
            '#e7f5ff',
            '#d0ebff',
            '#a5d8ff',
            '#74c0fc',
            '#4dabf7',
            '#339af0',
            '#228be6',
            '#1c7ed6',
            '#1971c2',
            '#1864ab',
            '#145591',
            '#114678',
            '#0d375e'
        ],
        'brown' => [
            '#faf4eb',
            '#ede0d1',
            '#e0cab7',
            '#d3b79e',
            '#c5a285',
            '#b78f6d',
            '#a87c56',
            '#956b47',
            '#825b3a',
            '#6f4b2d',
            '#5e3a21',
            '#4e2b15',
            '#422412'
        ],
        'camo' => [
            '#f9fbe7',
            '#e8ed9c',
            '#d2df4e',
            '#c2ce34',
            '#b5bb2e',
            '#a7a827',
            '#999621',
            '#8c851c',
            '#7e7416',
            '#6d6414',
            '#5d5411',
            '#4d460e',
            '#36300a'
        ],
        'choco' => [
            '#fff8dc',
            '#fce1bc',
            '#f7ca9e',
            '#f1b280',
            '#e99b62',
            '#df8545',
            '#d46e25',
            '#bd5f1b',
            '#a45117',
            '#8a4513',
            '#703a13',
            '#572f12',
            '#3d210d'
        ],
        'cyan' => [
            '#e3fafc',
            '#c5f6fa',
            '#99e9f2',
            '#66d9e8',
            '#3bc9db',
            '#22b8cf',
            '#15aabf',
            '#1098ad',
            '#0c8599',
            '#0b7285',
            '#095c6b',
            '#074652',
            '#053038'
        ],
        'gray' => [
            '#f8fafb',
            '#f2f4f6',
            '#ebedef',
            '#e0e4e5',
            '#d1d6d8',
            '#b1b6b9',
            '#979b9d',
            '#7e8282',
            '#666968',
            '#50514f',
            '#3a3a37',
            '#252521',
            '#121210'
        ],
        'green' => [
            '#ebfbee',
            '#d3f9d8',
            '#b2f2bb',
            '#8ce99a',
            '#69db7c',
            '#51cf66',
            '#40c057',
            '#37b24d',
            '#2f9e44',
            '#2b8a3e',
            '#237032',
            '#1b5727',
            '#133d1b'
        ],
        'indigo' => [
            '#edf2ff',
            '#dbe4ff',
            '#bac8ff',
            '#91a7ff',
            '#748ffc',
            '#5c7cfa',
            '#4c6ef5',
            '#4263eb',
            '#3b5bdb',
            '#364fc7',
            '#2f44ad',
            '#283a94',
            '#21307a'
        ],
        'jungle' => [
            '#ecfeb0',
            '#def39a',
            '#d0e884',
            '#c2dd6e',
            '#b5d15b',
            '#a8c648',
            '#9bbb36',
            '#8fb024',
            '#84a513',
            '#7a9908',
            '#658006',
            '#516605',
            '#3d4d04'
        ],
        'lime' => [
            '#f4fce3',
            '#e9fac8',
            '#d8f5a2',
            '#c0eb75',
            '#a9e34b',
            '#94d82d',
            '#82c91e',
            '#74b816',
            '#66a80f',
            '#5c940d',
            '#4c7a0b',
            '#3c6109',
            '#2c4706'
        ],
        'orange' => [
            '#fff4e6',
            '#ffe8cc',
            '#ffd8a8',
            '#ffc078',
            '#ffa94d',
            '#ff922b',
            '#fd7e14',
            '#f76707',
            '#e8590c',
            '#d9480f',
            '#bf400d',
            '#99330b',
            '#802b09'
        ],
        'pink' => [
            '#fff0f6',
            '#ffdeeb',
            '#fcc2d7',
            '#faa2c1',
            '#f783ac',
            '#f06595',
            '#e64980',
            '#d6336c',
            '#c2255c',
            '#a61e4d',
            '#8c1941',
            '#731536',
            '#59102a'
        ],
        'purple' => [
            '#f8f0fc',
            '#f3d9fa',
            '#eebefa',
            '#e599f7',
            '#da77f2',
            '#cc5de8',
            '#be4bdb',
            '#ae3ec9',
            '#9c36b5',
            '#862e9c',
            '#702682',
            '#5a1e69',
            '#44174f'
        ],
        'red' => [
            '#fff5f5',
            '#ffe3e3',
            '#ffc9c9',
            '#ffa8a8',
            '#ff8787',
            '#ff6b6b',
            '#fa5252',
            '#f03e3e',
            '#e03131',
            '#c92a2a',
            '#b02525',
            '#962020',
            '#7d1a1a'
        ],
        'sand' => [
            '#f8fafb',
            '#e6e4dc',
            '#d5cfbd',
            '#c2b9a0',
            '#aea58c',
            '#9a9178',
            '#867c65',
            '#736a53',
            '#5f5746',
            '#4b4639',
            '#38352d',
            '#252521',
            '#121210'
        ],
        'teal' => [
            '#e6fcf5',
            '#c3fae8',
            '#96f2d7',
            '#63e6be',
            '#38d9a9',
            '#20c997',
            '#12b886',
            '#0ca678',
            '#099268',
            '#087f5b',
            '#066649',
            '#054d37',
            '#033325'
        ],
        'violet' => [
            '#f3f0ff',
            '#e5dbff',
            '#d0bfff',
            '#b197fc',
            '#9775fa',
            '#845ef7',
            '#7950f2',
            '#7048e8',
            '#6741d9',
            '#5f3dc4',
            '#5235ab',
            '#462d91',
            '#3a2578'
        ],
        'yellow' => [
            '#fff9db',
            '#fff3bf',
            '#ffec99',
            '#ffe066',
            '#ffd43b',
            '#fcc419',
            '#fab005',
            '#f59f00',
            '#f08c00',
            '#e67700',
            '#b35c00',
            '#804200',
            '#663500'
        ],
    ];

    /**
     * Get colar value for a given luminosity.
     *
     * @throws OutOfBoundsException Invalid luminosity value.
     */
    function value(int $luminosity): string
    {
        if ($luminosity < 0 || $luminosity > 12) {
            throw new OutOfBoundsException ('Luminosity value must be between 0 and 12 inclusive');
        }
        return self::VALUE[$this->value][$luminosity];
    }
}
