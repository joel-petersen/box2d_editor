<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui" />
        <title>Box2dWeb JS Editor</title>
        <link rel="stylesheet" href="style.css">
        <script src="lib/Box2dWeb.min.js"></script>
        <script src="classes/box2d.js"></script>
    </head>

    <body>
        <div id="topbar">
            <div id="toolbar">
                <span class="clear"></span>
            </div>
            <div id="tool_properties">
            </div>
        </div>
        <div id="workspace">
            <table cellspacing="0" cellpadding="0">
                <tr> 
                    <td id="td_canvas">
                        <canvas id="canvas_debug"></canvas>
                    </td>
                    <td id="td_panel" valign="top"> 
                        <h3>Objects</h3>
                        <ul id="list_objects">
                        </ul>
                        <div id="properties_menu"></div>
                        <h3>Properties</h3>
                        <div id="object_properties">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <script src="classes/utils.js"></script>
        <script src="classes/world.js"></script>
        <script src="classes/debugDraw.js"></script>
        <script src="classes/objects.js"></script>
        <script src="classes/tools.js"></script>
        <script src="classes/pointer.js"></script>
        <script>
            debugDraw.set();
        </script>
        <script src="classes/menu.js"></script>
        <script src="classes/properties.js"></script>
        <script src="classes/objectlist.js"></script>
        <script src="classes/init.js"></script>
        <script>
            loop();

            function loop() {
                World.update();
                debugDraw.draw();
                requestAnimationFrame(loop);
            }
        </script>
    </body>
</html>
 