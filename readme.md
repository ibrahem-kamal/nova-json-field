# Nova Json Field

this is just a wrapper for [vue-json-field](https://www.npmjs.com/package/vue-json-editor)

**important notes**

- you need to cast your column to array
  `protected $casts = ['json'=>'array'];`

**example:**

    JsonField::make('Json')
    	    ->mode('view') // avaialable modes [tree,code,form,text,view] default code
    	    ->expandedOnStart(true)
    	    ->defaultJsonPath(resource_path('test.json'))  // path to the json file

**screenshots**
![](https://i.imgur.com/zyevVL7.png)
![](https://i.imgur.com/5QyuNdp.png)
