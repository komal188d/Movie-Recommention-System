
<?php include ('main_data.php');?>
<!DOCTYPE html>
<html>
<head>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<title>Incremental Tree</title>
<meta name="description" content="Incrementally grow a tree as each node is expanded for the first time." />
<!-- Copyright 1998-2018 by Northwoods Software Corporation. -->
<meta charset="UTF-8">
<script src="go.js"></script>
<script src="goSamples.js"></script>  <!-- this is only for the GoJS Samples framework -->
<script id="code">
  function init() {
    if (window.goSamples) goSamples();  // init for these samples -- you don't need to call this
    var $ = go.GraphObject.make;  // for conciseness in defining templates
    var blues = ['#E1F5FE', '#B3E5FC', '#81D4FA', '#4FC3F7', '#29B6F6', '#03A9F4', '#039BE5', '#0288D1', '#0277BD', '#01579B'];
    myDiagram =$(go.Diagram, "myDiagramDiv",  // must name or refer to the DIV HTML element
        {
          initialAutoScale: go.Diagram.UniformToFill,
          contentAlignment: go.Spot.Center,
          layout: $(go.ForceDirectedLayout),
          // moving and copying nodes also moves and copies their subtrees
          "commandHandler.copiesTree": true,  // for the copy command
          "commandHandler.deletesTree": true, // for the delete command
          "draggingTool.dragsTree": true,  // dragging for both move and copy
          "undoManager.isEnabled": true
        });
    // Define the Node template.
    // This uses a Spot Panel to position a button relative
    // to the ellipse surrounding the text.
    myDiagram.nodeTemplate =
      $(go.Node, "Spot",
        {
          selectionObjectName: "PANEL",
          isTreeExpanded: false,
          isTreeLeaf: false,
          isClipping: true,
          scale: 2
          },
        // the node's outer shape, which will surround the text
        $(go.Panel, "Auto",
          { name: "PANEL" },
          $(go.Shape, "Circle",
            { fill: "whitesmoke", stroke: "black", width: 65, strokeWidth: 0 , height: 65},
            new go.Binding("fill", "rootdistance", function(dist) {
              dist = Math.min(blues.length - 1, dist);
              return blues[dist];
            })),
          $(go.Picture, "https://images.indianexpress.com/2018/04/doctor-strange-marvel-759.jpg",
          { width: 65, height: 65 },
          new go.Binding("source", "icon"))),
        // the expand/collapse button, at the top-right corner
        $("TreeExpanderButton",
          {
            name: 'TREEBUTTON',
            width: 10, height: 10,
            alignment: go.Spot.Center,
            alignmentFocus: go.Spot.Center,
            // customize the expander behavior to
            // create children if the node has never been expanded
            click: function (e, obj) {  // OBJ is the Button
                var node = obj.part;  // get the Node containing this Button
                if (node === null) return;
                e.handled = true;
                expandNode(node);
              }
          }
        )  // end TreeExpanderButton
      );  // end Node
    // create the model with a root node data
    myDiagram.model = new go.TreeModel([
      { key: 0, color: blues[0], everExpanded: false },
  
    ]);
    document.getElementById('zoomToFit').addEventListener('click', function() {
      myDiagram.zoomToFit();
    });
    // document.getElementById('expandAtRandom').addEventListener('click', function() {
    //   expandAtRandom();
    // });
  }
  function expandNode(node) {
    var diagram = node.diagram;
    diagram.startTransaction("CollapseExpandTree");
    // this behavior is specific to this incrementalTree sample:
    var data = node.data;
    if (!data.everExpanded) {
      // only create children once per node
      diagram.model.setDataProperty(data, "everExpanded", true);
      var numchildren = createSubTree(data);
      if (numchildren === 0) {  // now known no children: don't need Button!
        node.findObject('TREEBUTTON').visible = false;
      }
    }
    // this behavior is generic for most expand/collapse tree buttons:
    if (node.isTreeExpanded) {
      diagram.commandHandler.collapseTree(node);
    } else {
      diagram.commandHandler.expandTree(node);
    }
    diagram.commitTransaction("CollapseExpandTree");
    myDiagram.zoomToFit();
  }
  // This dynamically creates the immediate children for a node.
  // The sample assumes that we have no idea of whether there are any children
  // for a node until we look for them the first time, which happens
  // upon the first tree-expand of a node.
  function createSubTree(parentdata) {
    var numchildren = 4;
    if (myDiagram.nodes.count <= 1) {
      numchildren += 1;  // make sure the root node has at least one child
    }
    // create several node data objects and add them to the model
    var model = myDiagram.model;
    var parent = myDiagram.findNodeForData(parentdata);
    var degrees = 1;
    var grandparent = parent.findTreeParentNode();
    while (grandparent) {
      degrees++;
      grandparent = grandparent.findTreeParentNode();
    }

    var arr=<?php echo $link; ?>;

  

    for (var i = 0; i < numchildren; i++) 
    {
      var childdata = {
        key: model.nodeDataArray.length,
        parent: parentdata.key,
        rootdistance: degrees,
        icon: arr[i]
      };
      // add to model.nodeDataArray and create a Node
      model.addNodeData(childdata);
      // position the new child node close to the parent
      var child = myDiagram.findNodeForData(childdata);
      child.location = parent.location;
    }
    return numchildren;
  }
  // function expandAtRandom() {
  //   var eligibleNodes = [];
  //   myDiagram.nodes.each(function(n) {
  //     if (!n.isTreeExpanded) eligibleNodes.push(n);
  //   })
  //   var node = eligibleNodes[Math.floor(Math.random() * (eligibleNodes.length))];
  //   expandNode(node);
  // }
</script>
</head>
<body onload="init()">
<div id="sample">
  <div id="myDiagramDiv" style="background-color: white; border: solid 1px black; width: 100%; height: 600px"></div>
  <p><button id="zoomToFit">Zoom to Fit</button></p>
</div>
</body>
</html>