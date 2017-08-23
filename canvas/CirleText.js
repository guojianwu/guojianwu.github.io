/**
 * Created by Administrator on 2017/8/23 0023.
 */

function CirleText(option){
    this._init(option)
}
CirleText.prototype={
    _init:function(option){
        this.x=option.x || 0;
        this.y=option.y || 0;
        this.innerRadius=option.innerRadius || 0;
        this.outerRadius=option.outerRadius || 0;
        this.text=option.text || 'canvas';
        this.innerStyle=option.innerStyle || 'red';
        this.outerStyle=option.outerStyle || 'blue';

        this.group=new Konva.Group({
            x:this.x,
            y:this.y
        });

        //初始化一个内部圆
        var innerCirle=new Konva.Circle({
            x:0,
            y:0,
            radius:this.innerRadius,
            fill:this.innerStyle,
            opacity:0.8
        });

        this.group.add(innerCirle);

        //初始化一个圆环
        var outerRing=new Konva.Ring({
            x:0,
            y:0,
            innerRadius:this.innerRadius,
            outerRadius:this.outerRadius,
            fill:this.outerStyle,
            opacity:0.3
        });
        this.group.add(outerRing);
        //初始化一个文字

        var text=new Konva.Text({
            x:-this.outerRadius,
            y:-7,
            width: this.outerRadius*2,
            fill:'#fff',
            fontSize:17,
            fontStyle:'bold',
            text:this.text,
            align:'center'
        })
        this.group.add(text);

    },
    addToGropOrLayer:function(arg){
        arg.add(this.group);
    }
}