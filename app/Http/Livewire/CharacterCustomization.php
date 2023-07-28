<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Intervention\Image\ImageManagerStatic as Image;


class CharacterCustomization extends Component
{
    public $selectedHead = 'none';
    public $selectedCandy = 'none';
    public $selectedGlasses = 'none';
    public $selectedTab = '1';

    public function setAccessory($accessoryNumber, $type)
    {
        switch ($type) {
            case 'head':
                $this->selectedHead = $accessoryNumber;
                break;
            case 'candy':
                $this->selectedCandy = $accessoryNumber;
                break;
            case 'glasses':
                $this->selectedGlasses = $accessoryNumber;
                break;
        }
    }

    public function setTab($tab)
    {
        $this->selectedTab = $tab;
    }

    public function createCustomCharacter()
    {
        $basePath = public_path('character_customization/custom_characters/');

        $filename = "heads{$this->selectedHead}_candies{$this->selectedCandy}_glasses{$this->selectedGlasses}.png";

        if (!file_exists($basePath . $filename)) {
        $bodyPath = public_path("character_customization/body.png");
        $headPath = public_path("character_customization/heads/{$this->selectedHead}.png");
        $candyPath = public_path("character_customization/candies/{$this->selectedCandy}.png");
        $glassesPath = public_path("character_customization/glasses/{$this->selectedGlasses}.png");

        $body = Image::make($bodyPath);
        $head = Image::make($headPath);
        $candy = Image::make($candyPath);
        $glasses = Image::make($glassesPath);

        $body->resize(583, 668);
        $head->resize(583, 668);
        $candy->resize(583, 668);
        $glasses->resize(200, 100);

        // Salvar a nova imagem
        $resultImage = Image::canvas(583, 668);
        $resultImage->insert($body);
        $resultImage->insert($head, 'center', 0, 25);
        $resultImage->insert($candy, 'center', 4, 15);
        $resultImage->insert($glasses, 'center', 10, 100);
        $resultImage->save($basePath . $filename);
        }

        return asset('character_customization/custom_characters/' . $filename);
    }

    public function render()
    {
        return view('livewire.character-customization');
    }
}
