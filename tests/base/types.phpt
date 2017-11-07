--TEST--
Scalar data types - Tests recognizing data types
--SKIPIF--
<?php if (!extension_loaded("Zephir Parser")) print "skip The zephir_parser extension is not loaded"; ?>
--FILE--
<?php require(__DIR__ . "/../zephir_parser_test.inc");

$ir = parse_file("base/types.zep");
var_dump($ir);
--EXPECTF--
array(2) {
  [0]=>
  array(5) {
    ["type"]=>
    string(9) "namespace"
    ["name"]=>
    string(7) "Example"
    ["file"]=>
    string(%d) "%s/tests/data/base/types.zep"
    ["line"]=>
    int(3)
    ["char"]=>
    int(5)
  }
  [1]=>
  array(8) {
    ["type"]=>
    string(5) "class"
    ["name"]=>
    string(4) "Test"
    ["abstract"]=>
    int(0)
    ["final"]=>
    int(0)
    ["definition"]=>
    array(4) {
      ["properties"]=>
      array(8) {
        [0]=>
        array(7) {
          ["visibility"]=>
          array(1) {
            [0]=>
            string(6) "public"
          }
          ["type"]=>
          string(8) "property"
          ["name"]=>
          string(6) "t_int1"
          ["default"]=>
          array(5) {
            ["type"]=>
            string(3) "int"
            ["value"]=>
            string(2) "10"
            ["file"]=>
            string(%d) "%s/tests/data/base/types.zep"
            ["line"]=>
            int(5)
            ["char"]=>
            int(27)
          }
          ["file"]=>
          string(%d) "%s/tests/data/base/types.zep"
          ["line"]=>
          int(6)
          ["char"]=>
          int(7)
        }
        [1]=>
        array(7) {
          ["visibility"]=>
          array(1) {
            [0]=>
            string(6) "public"
          }
          ["type"]=>
          string(8) "property"
          ["name"]=>
          string(6) "t_int2"
          ["default"]=>
          array(5) {
            ["type"]=>
            string(3) "int"
            ["value"]=>
            string(4) "-100"
            ["file"]=>
            string(%d) "%s/tests/data/base/types.zep"
            ["line"]=>
            int(6)
            ["char"]=>
            int(27)
          }
          ["file"]=>
          string(%d) "%s/tests/data/base/types.zep"
          ["line"]=>
          int(7)
          ["char"]=>
          int(7)
        }
        [2]=>
        array(7) {
          ["visibility"]=>
          array(1) {
            [0]=>
            string(6) "public"
          }
          ["type"]=>
          string(8) "property"
          ["name"]=>
          string(6) "t_int3"
          ["default"]=>
          array(5) {
            ["type"]=>
            string(3) "int"
            ["value"]=>
            string(8) "0xFFFFFF"
            ["file"]=>
            string(%d) "%s/tests/data/base/types.zep"
            ["line"]=>
            int(7)
            ["char"]=>
            int(27)
          }
          ["file"]=>
          string(%d) "%s/tests/data/base/types.zep"
          ["line"]=>
          int(8)
          ["char"]=>
          int(7)
        }
        [3]=>
        array(7) {
          ["visibility"]=>
          array(1) {
            [0]=>
            string(6) "public"
          }
          ["type"]=>
          string(8) "property"
          ["name"]=>
          string(6) "t_int4"
          ["default"]=>
          array(5) {
            ["type"]=>
            string(3) "int"
            ["value"]=>
            string(9) "-0x000000"
            ["file"]=>
            string(%d) "%s/tests/data/base/types.zep"
            ["line"]=>
            int(8)
            ["char"]=>
            int(27)
          }
          ["file"]=>
          string(%d) "%s/tests/data/base/types.zep"
          ["line"]=>
          int(10)
          ["char"]=>
          int(7)
        }
        [4]=>
        array(7) {
          ["visibility"]=>
          array(1) {
            [0]=>
            string(6) "public"
          }
          ["type"]=>
          string(8) "property"
          ["name"]=>
          string(9) "t_double1"
          ["default"]=>
          array(5) {
            ["type"]=>
            string(6) "double"
            ["value"]=>
            string(8) "0.000001"
            ["file"]=>
            string(%d) "%s/tests/data/base/types.zep"
            ["line"]=>
            int(10)
            ["char"]=>
            int(32)
          }
          ["file"]=>
          string(%d) "%s/tests/data/base/types.zep"
          ["line"]=>
          int(11)
          ["char"]=>
          int(7)
        }
        [5]=>
        array(7) {
          ["visibility"]=>
          array(1) {
            [0]=>
            string(6) "public"
          }
          ["type"]=>
          string(8) "property"
          ["name"]=>
          string(9) "t_double1"
          ["default"]=>
          array(5) {
            ["type"]=>
            string(6) "double"
            ["value"]=>
            string(9) "-0.000001"
            ["file"]=>
            string(%d) "%s/tests/data/base/types.zep"
            ["line"]=>
            int(11)
            ["char"]=>
            int(32)
          }
          ["file"]=>
          string(%d) "%s/tests/data/base/types.zep"
          ["line"]=>
          int(12)
          ["char"]=>
          int(7)
        }
        [6]=>
        array(7) {
          ["visibility"]=>
          array(1) {
            [0]=>
            string(6) "public"
          }
          ["type"]=>
          string(8) "property"
          ["name"]=>
          string(9) "t_double1"
          ["default"]=>
          array(5) {
            ["type"]=>
            string(6) "double"
            ["value"]=>
            string(10) "909.999999"
            ["file"]=>
            string(66) "/home/klay/workspace/c/php-zephir-parser/tests/data/base/types.zep"
            ["line"]=>
            int(12)
            ["char"]=>
            int(32)
          }
          ["file"]=>
          string(%d) "%s/tests/data/base/types.zep"
          ["line"]=>
          int(13)
          ["char"]=>
          int(7)
        }
        [7]=>
        array(7) {
          ["visibility"]=>
          array(1) {
            [0]=>
            string(6) "public"
          }
          ["type"]=>
          string(8) "property"
          ["name"]=>
          string(9) "t_double1"
          ["default"]=>
          array(5) {
            ["type"]=>
            string(6) "double"
            ["value"]=>
            string(11) "-909.999999"
            ["file"]=>
            string(%d) "%s/tests/data/base/types.zep"
            ["line"]=>
            int(13)
            ["char"]=>
            int(32)
          }
          ["file"]=>
          string(%d) "%s/tests/data/base/types.zep"
          ["line"]=>
          int(14)
          ["char"]=>
          int(1)
        }
      }
      ["file"]=>
      string(%d) "%s/tests/data/base/types.zep"
      ["line"]=>
      int(3)
      ["char"]=>
      int(5)
    }
    ["file"]=>
    string(%d) "%s/tests/data/base/types.zep"
    ["line"]=>
    int(3)
    ["char"]=>
    int(5)
  }
}
