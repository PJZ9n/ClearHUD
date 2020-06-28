<?php

/**
 * Copyright (c) 2020 PJZ9n.
 *
 * This file is part of ClearHUD.
 *
 * ClearHUD is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * ClearHUD is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with ClearHUD. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace pjz9n\clearhud;

use pjz9n\resourcepacktools\generator\SimpleResourcePack;
use pjz9n\resourcepacktools\manifest\Version;
use pjz9n\resourcepacktools\ResourcePack;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public function onEnable(): void
    {
        $path = $this->getDataFolder() . "pack.zip";
        $pack = new SimpleResourcePack($this, new Version(1, 0, 0));
        $pack->addFile("hud_tip_text_background.png", "textures/ui/hud_tip_text_background.png");
        $pack->setPackIcon("grass.png");
        $pack->generate($path);
        ResourcePack::register($path);
    }
}
