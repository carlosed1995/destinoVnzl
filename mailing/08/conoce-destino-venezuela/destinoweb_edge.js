/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {

    "use strict";
    var im='images/',
        aud='media/',
        vid='media/',
        js='js/',
        fonts = {
        },
        opts = {
            'gAudioPreloadPreference': 'auto',
            'gVideoPreloadPreference': 'auto'
        },
        resources = [
        ],
        scripts = [
        ],
        symbols = {
            "stage": {
                version: "6.0.0",
                minimumCompatibleVersion: "5.0.0",
                build: "6.0.0.400",
                scaleToFit: "none",
                centerStage: "none",
                resizeInstances: false,
                content: {
                    dom: [
                        {
                            id: 'img',
                            type: 'image',
                            rect: ['955px', '38px', '754px', '105px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"img.png",'0px','0px']
                        },
                        {
                            id: 'img3',
                            type: 'image',
                            rect: ['-179px', '290px', '179px', '105px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"img3.png",'0px','0px']
                        },
                        {
                            id: '_01',
                            type: 'image',
                            rect: ['0px', '446px', '945px', '46px', 'auto', 'auto'],
                            clip: 'rect(25px 945px 46.427841186523px 0px)',
                            fill: ["rgba(0,0,0,0)",im+"01.png",'0px','0px']
                        },
                        {
                            id: 'blue',
                            type: 'rect',
                            rect: ['-6px', '446px', '957px', '76px', 'auto', 'auto'],
                            fill: ["rgba(14,27,49,1.00)"],
                            stroke: [0,"rgba(0,0,0,1)","none"]
                        },
                        {
                            id: 'img4',
                            type: 'image',
                            rect: ['974px', '290px', '179px', '105px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"img4.png",'0px','0px']
                        },
                        {
                            id: 'img2',
                            type: 'image',
                            rect: ['-782px', '162px', '757px', '105px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"img2.png",'0px','0px']
                        },
                        {
                            id: 'copyright',
                            type: 'image',
                            rect: ['357px', '552px', '232px', '17px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"copyright.png",'0px','0px']
                        },
                        {
                            id: 'white',
                            type: 'rect',
                            rect: ['-10px', '-11px', '966px', '622px', 'auto', 'auto'],
                            opacity: '0',
                            fill: ["rgba(255,255,255,1.00)"],
                            stroke: [0,"rgb(0, 0, 0)","none"]
                        },
                        {
                            id: 'img9',
                            type: 'image',
                            rect: ['-28px', '278px', '1001px', '383px', 'auto', 'auto'],
                            opacity: '0',
                            fill: ["rgba(0,0,0,0)",im+"img9.png",'0px','0px']
                        },
                        {
                            id: 'img6',
                            type: 'image',
                            rect: ['343px', '343px', '260px', '76px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"img6.png",'0px','0px']
                        },
                        {
                            id: 'img7',
                            type: 'image',
                            rect: ['400px', '334px', '81px', '18px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"img7.png",'0px','0px']
                        },
                        {
                            id: 'img8',
                            type: 'image',
                            rect: ['377px', '625px', '192px', '23px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"img8.png",'0px','0px']
                        },
                        {
                            id: 'logo3',
                            type: 'image',
                            rect: ['272px', '224px', '338px', '161px', 'auto', 'auto'],
                            clip: 'rect(153px 338px 161.4430847168px 0px)',
                            cursor: 'pointer',
                            fill: ["rgba(0,0,0,0)",im+"logo.png",'0px','0px']
                        },
                        {
                            id: 'twiiter',
                            type: 'image',
                            rect: ['382px', '718px', '36px', '39px', 'auto', 'auto'],
                            cursor: 'pointer',
                            fill: ["rgba(0,0,0,0)",im+"twiiter.png",'0px','0px']
                        },
                        {
                            id: 'hashtag',
                            type: 'image',
                            rect: ['-364px', '80px', '268px', '39px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"hashtag.png",'0px','0px']
                        },
                        {
                            id: 'ANIMACION-DESTINOSD',
                            type: 'image',
                            rect: ['-405px', '41px', '377px', '60px', 'auto', 'auto'],
                            cursor: 'pointer',
                            fill: ["rgba(0,0,0,0)",im+"ANIMACION-DESTINOSD.png",'0px','0px']
                        },
                        {
                            id: 'facebook',
                            type: 'image',
                            rect: ['422px', '717px', '36px', '39px', 'auto', 'auto'],
                            cursor: 'pointer',
                            fill: ["rgba(0,0,0,0)",im+"facebook.png",'0px','0px']
                        },
                        {
                            id: 'ig',
                            type: 'image',
                            rect: ['458px', '718px', '40px', '39px', 'auto', 'auto'],
                            cursor: 'pointer',
                            fill: ["rgba(0,0,0,0)",im+"ig.png",'0px','0px']
                        },
                        {
                            id: 'slogan',
                            type: 'image',
                            rect: ['973px', '25px', '240px', '94px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"slogan.png",'0px','0px']
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: ['null', 'null', '945px', '600px', 'auto', 'auto'],
                            overflow: 'hidden',
                            fill: ["rgba(14,27,49,1.00)"]
                        }
                    }
                },
                timeline: {
                    duration: 10250,
                    autoPlay: true,
                    data: [
                        [
                            "eid26",
                            "top",
                            1000,
                            250,
                            "swing",
                            "${img7}",
                            '611px',
                            '334px'
                        ],
                        [
                            "eid5",
                            "left",
                            4000,
                            1000,
                            "easeInBack",
                            "${img4}",
                            '974px',
                            '766px'
                        ],
                        [
                            "eid19",
                            "opacity",
                            7000,
                            250,
                            "easeInQuad",
                            "${white}",
                            '0.000000',
                            '1'
                        ],
                        [
                            "eid57",
                            "left",
                            9250,
                            0,
                            "easeInQuad",
                            "${ig}",
                            '458px',
                            '458px'
                        ],
                        [
                            "eid33",
                            "opacity",
                            7250,
                            250,
                            "easeInQuad",
                            "${img9}",
                            '0.000000',
                            '1'
                        ],
                        [
                            "eid65",
                            "left",
                            9750,
                            500,
                            "easeInOutElastic",
                            "${hashtag}",
                            '-364px',
                            '55px'
                        ],
                        [
                            "eid53",
                            "top",
                            7750,
                            500,
                            "easeInOutElastic",
                            "${twiiter}",
                            '718px',
                            '341px'
                        ],
                        [
                            "eid3",
                            "left",
                            4000,
                            750,
                            "easeInQuad",
                            "${img2}",
                            '-782px',
                            '-3px'
                        ],
                        [
                            "eid7",
                            "left",
                            2000,
                            139,
                            "easeInQuad",
                            "${blue}",
                            '-6px',
                            '17px'
                        ],
                        [
                            "eid8",
                            "left",
                            2139,
                            139,
                            "easeInQuad",
                            "${blue}",
                            '17px',
                            '50px'
                        ],
                        [
                            "eid9",
                            "left",
                            2278,
                            139,
                            "easeInQuad",
                            "${blue}",
                            '50px',
                            '110px'
                        ],
                        [
                            "eid10",
                            "left",
                            2417,
                            139,
                            "easeInQuad",
                            "${blue}",
                            '110px',
                            '189px'
                        ],
                        [
                            "eid11",
                            "left",
                            2556,
                            139,
                            "easeInQuad",
                            "${blue}",
                            '189px',
                            '330px'
                        ],
                        [
                            "eid12",
                            "left",
                            2694,
                            139,
                            "easeInQuad",
                            "${blue}",
                            '330px',
                            '473px'
                        ],
                        [
                            "eid13",
                            "left",
                            2833,
                            139,
                            "easeInQuad",
                            "${blue}",
                            '473px',
                            '604px'
                        ],
                        [
                            "eid14",
                            "left",
                            2972,
                            139,
                            "easeInQuad",
                            "${blue}",
                            '604px',
                            '687px'
                        ],
                        [
                            "eid15",
                            "left",
                            3111,
                            139,
                            "easeInQuad",
                            "${blue}",
                            '687px',
                            '974px'
                        ],
                        [
                            "eid4",
                            "left",
                            4000,
                            1000,
                            "easeInBack",
                            "${img3}",
                            '-179px',
                            '0px'
                        ],
                        [
                            "eid2",
                            "left",
                            4000,
                            750,
                            "easeInQuad",
                            "${img}",
                            '955px',
                            '192px'
                        ],
                        [
                            "eid74",
                            "left",
                            9750,
                            500,
                            "easeInOutElastic",
                            "${ANIMACION-DESTINOSD}",
                            '-405px',
                            '41px'
                        ],
                        [
                            "eid58",
                            "top",
                            8750,
                            500,
                            "easeInOutElastic",
                            "${ig}",
                            '718px',
                            '341px'
                        ],
                        [
                            "eid51",
                            "clip",
                            7250,
                            250,
                            "easeInQuad",
                            "${logo3}",
                            [153,338,161.4430847168,0],
                            [4,338,161.4430847168,0],
                            {valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'}
                        ],
                        [
                            "eid66",
                            "top",
                            9750,
                            0,
                            "easeInOutElastic",
                            "${hashtag}",
                            '80px',
                            '80px'
                        ],
                        [
                            "eid24",
                            "top",
                            0,
                            1000,
                            "easeInBounce",
                            "${img6}",
                            '637px',
                            '343px'
                        ],
                        [
                            "eid27",
                            "top",
                            1000,
                            250,
                            "swing",
                            "${img6}",
                            '343px',
                            '347px'
                        ],
                        [
                            "eid63",
                            "left",
                            9250,
                            500,
                            "easeInOutElastic",
                            "${slogan}",
                            '973px',
                            '676px'
                        ],
                        [
                            "eid29",
                            "top",
                            1250,
                            250,
                            "swing",
                            "${img8}",
                            '625px',
                            '423px'
                        ],
                        [
                            "eid55",
                            "top",
                            8250,
                            500,
                            "easeInOutElastic",
                            "${facebook}",
                            '717px',
                            '341px'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load("destinoweb_edgeActions.js");
})("EDGE-20300275");
