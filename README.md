# CSV to Objects

Library to import CSV or XLSX files into an array of objects according to an specified definition

## Instructions

To convert a file into an an array of objects, you must provide an `ImportDefinition`. This object is created by 
passing an array in an specific format. We recommend using YAML for defining this file as it is human-friendly. This 
format can be quite sophisticated, so two examples are provided: 
  
### Basic import definition
 
```yaml
name: Fruits definition                              # (Optional) Name of the import definition
columns:                                             # (Required) An associative array with the headings of the columns in the file that will be imported
    Name: { fruit: name }                            # 'fruit' is a shortname for the object being created for the list (defined below) and name will be the argument passed to the constructor                                         
    Weight: ~                                        # Null indicates that it can be ignored
returns: CSVObjects\ImportBundle\Tests\Objects\Fruit # The class of the elements that will be returned 
```

### Full import definition

```yaml
name: Fruits definition                             
columns:                                            
    Name: { fruit: name }                           
    Weight: ~                                       
returns: CSVObjects\ImportBundle\Tests\Objects\Fruit
```
