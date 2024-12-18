<?php
// 下記のようにlesson1のファイルをインポートしてください。
// (他のファイルを参照する関数はいくつかあるので調べてください。)
// (lesson1の文字列がそのまま出力されてしまっていても大丈夫とします。)


// 下記のクラスを作成してください。

// Patient 
// lesson1からPersonを継承

// height: float 身長（ｍ）private
// weight: float 体重 (kg) private

// __construct(name: string, age:int, gender: string, height: float, weight: float)
// 名前、年齢、性別、身長、体重を受け取り初期化する。

// calculateStandardWeight() :float
// 平均体重を返す （身長 × 身長 × 22)

// getHeight()
// 身長を返す

// getWeight()
// 体重を返す

// クラスが完成したら適当なインスタンスを生成し、
// それぞれの関数を使用して下記のフォーマットで出力してください。

// 〇〇さんの身長は〇〇mなので平均体重は〇〇kgです。 現在の体重は〇〇kgです。

include 'lesson1.php';

class Patient
{
    public string $name;
    public int $age;
    public string $gender;
    private float $height;
    private float $weight;

    public function __construct($name, $age, $gender, $height, $weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function calculateStandardWeight() :float
    {
        return $this->height * $this->height * 22;
    }

    public function getHeight() :float
    {
        return $this->height;
    }

    public function getWeight() :float
    {
        return $this->weight;
    } 
}

$patient = new Patient("瀧田桃子", 25, "女性", 1.54, 49);

echo $patient->getName()."さんの身長は".$patient->getHeight()."mなので平均体重は".$patient->calculateStandardWeight()."kgです。現在の体重は".$patient->getWeight()."kgです。";

?>