/*
Copyright 2021 Ziadin Givan

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

https://github.com/givanz/Vvvebjs
*/

Vvveb.ComponentsGroup['المنت های قالب'] =
    [
        "theme/section",
        "theme/rowcol12",
    ];


var base_sort = 100;//start sorting for base component from 100 to allow extended properties to be first


Vvveb.Components.extend("_base", "theme/section", {
    classes: ["section-50", "section-100", "section-150"],
    image: asseturlt + "libs/builder/" + "icons/container.svg",
    html: '<section class="section-50 " >' +
        '<div class="shell-wide">\n' +
        '    <div class="range range-xs-center" >\n' +
        '<h5 class="text-center">سلام این یک سشن است</h5>'+
        '    </div>' +
        '</div>' +
        '</section>',
    name: "سشن",
    properties: [
        {
            name: "نوع",
            key: "type",
            htmlAttr: "class",
            inputtype: SelectInput,
            validValues: ["section-50", "section-100", "section-150"],
            data: {
                options: [
                    {
                        value: "section-50",
                        text: "نزدیک به سشن های دیگر"
                    },
                    {
                        value: "section-100",
                        text: "با مقداری فاصله از سشن های دیگر"
                    },
                    {
                        value: "section-150",
                        text: "با فاصله ی زیاد از سشن های دیگر"
                    },

                ]
            }
        },
    ],
});




Vvveb.Components.extend("_base", "theme/rowcol12", {
    image: asseturlt + "libs/builder/" + "icons/container.svg",
    html: '<div class="row " >' +
        '<div class="col-md-12">\n' +
        '  <h5 class="text-center">این یک ردیف تمام عرض است</h5>  ' +
        '</div>' +
        '</div>',
    name: "ردیف و ستون تمام عرض(row>col12(",
    properties: [

    ],
});


