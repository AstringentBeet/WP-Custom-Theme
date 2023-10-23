# Custom Wordpress Theme Development
### Author: Alexander Effanga

### Progress Log
#### 10/19/2023
I've always been interested in the Wordpress ecosystem, but haven't made it past the typical drag-and-drop page builder plugins. Certain themes allow a degree of functionality, but even the most flexible of themes have their limitations. The goal here is to
learn the ropes of the Wordpress ecosystem, along with a decent amount of PHP and React, to create a theme that I'll eventually host live.

#### 10/23/2023
I don't see myself using Duotones on Wordpress, but I feel like it's worth mentioning on here. Duotones for Wordpress is an experimental feture that allows the user to place a color-based filter on top of an image. The name stems from the fact that a user is required to enter two different colors, a darker color and lighter color, in order to create a dynamic color effect.

```
"settings": {
        "color": {
            "defaultPalette": false,
                "background": true,
                "text": true,
                "link": true,
                "custom": false,
                "duotone": [
                    {"slug": "u-pink-sunset", "colors": ["#11245e", "#dc4379"], "name": "pink-sunset"}
                ]
        }
```
![](../../../../Pictures/wp-duotones.png)
Anywhats, I'm learning more about the theme.json file and just how deep the cutomizations can go on this.
