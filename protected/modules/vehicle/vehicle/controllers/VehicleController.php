<?php

Yii::import('application.vendor.*');
require_once('edmunds/VinAPI.php');
require_once ('zipcodeAPI/Ziptastic.php');



class VehicleController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';
    
    

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'vin','CityStateLookup' ,'autocompletemake','AutoCompleteModel','AutoCompleteBody'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    
    
  
    
    public function ActionAutoCompleteBody(){
        

        
        if (Yii::app()->request->isAjaxRequest)
        {
            $term=  Yii::app()->request->getParam('term');
            $match = addcslashes($term,'%_');
            
            $criteria= new CDbCriteria();
            $criteria->condition='body LIKE :body';
            $criteria->params=array(':body'=>$match.'%');
            $bodyModel= VBody::model()->findAll($criteria);
            
            
            if(!empty($bodyModel))
            {
                foreach ($bodyModel as $key) {
                    
                     $body[]= $key->body;
                }
                
                echo CJSON::encode($body);
                
            }
            
            
        }
    }
    
    public function ActionAutoCompleteModel() {

       $make = Yii::app()->user->hasState('make');



        if (Yii::app()->request->isAjaxRequest) {
            $term = Yii::app()->request->getParam('term');
             $match = addcslashes($term, '%_');



            if ($make) {
                
                
                $make = Yii::app()->user->getState('make');
                
                $criteria= new CDbCriteria();
                $criteria->with=array(
                    'make',);
                $criteria->condition='make =:make AND model LIKE :match';
                
                $criteria->params=array(':make'=>$make,':match'=>$match.'%');
                  $vmodel=  VModel::model()->findAll($criteria);
               
                  
           
          if(!empty($vmodel)){        
         foreach ($vmodel as $row) {
             
             $models[]= $row->model;
             
         }  
      Yii::app()->user->setState('make',NULL);

       echo CJSON::encode($models);
         
          } 
                
                
            }
 else {
     
     $criteria= new CDbCriteria();
     $criteria->condition='model LIKE :match';
     $criteria->params=array(':match'=>$match.'%');
     $vmodel=  VModel::model()->findAll($criteria);

        if(!empty($vmodel)){        
         foreach ($vmodel as $row) {
             
             $models[]= $row->model;
             
         }           
       echo CJSON::encode($models);
         
          } 
     
     
 }
        }
    }

    /**
     * Auto complete for make field in the create form
     * @return json make array
     */
    public function actionAutoCompleteMake() {     
        if (Yii::app()->request->isAjaxRequest) {
            $term = Yii::app()->request->getParam('term');
            $match = addcslashes($term, '%_');
            $criteria = new CDbCriteria();
            $criteria->condition = 'make LIKE :match';
            $criteria->params = array(':match' => $match . "%");
            //$criteria->addSearchCondition('make', $term);
            $makeModel=  VMake::model()->findAll($criteria);
//          CVarDumper::dump($makeModel,10,true);
            if (!empty($makeModel)) {
                foreach ($makeModel as $row) {
                    $make[] = $row->make;
                    Yii::app()->user->setState('make',$row->make);
                }
                echo CJSON::encode($make);
            }
        }
    }
    
    
    
    public function ActionCityStateLookup()
    {

        if(Yii::app()->request->isAjaxRequest)
        {
            $zip= trim(Yii::app()->request->getParam('zip'));
            
            $zipLookupApi= new Ziptastic($zip);
                      
                  $city= $zipLookupApi->city;
                  $state=$zipLookupApi->state;

                  echo CJSON::encode(array(
                      'state'=>$state,
                      'city'=>$city,
                      
                  ));

            
            
        }
        else
        {
            
              echo CJSON::encode(array(
                      'state'=>NULL,
                      'city'=>null,
                      
                  ));
            
        }
        
        
        
        
        
    }

    /*
     * Does a call to edmounds.com Api
     * @returns  make model,year, to update the form.
     */
    public function actionVin() {
        if (Yii::app()->request->isAjaxRequest) {
        $vin = trim(Yii::app()->request->getParam('vin'));
                  
            if (!$vin == '' & strlen($vin) > 15) {
                 //$vinNumber='3GSCL33P38S670245';
                $VIN_decoder = new vinDecoder($vin);
                $make = $VIN_decoder->getMake();
                $model = $VIN_decoder->getModel();
                $year = $VIN_decoder->getYear();
                $body = $VIN_decoder->getBodyType();
                echo CJSON::encode(array(
                    'make' => $make,
                    'model' => $model,
                    'year' => $year,
                    'body' => $body
                ));
                Yii::app()->end();
            } else {
                echo CJSON::encode(array(
                    'make' => NULL,
                    'model' => NULL,
                    'year' => NULL,
                    'body' => NULL
                ));
            }
        }
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
                $purchaseModel= new Purchase;

        $model = new Vehicle;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

	
        
        

        if (isset($_POST['Vehicle']) && isset($_POST['Purchase'])) {
          
            $purchaseModel->attributes=$_POST['Purchase'];

           $model->attributes = $_POST['Vehicle'];
           
           
           $valid=$purchaseModel->validate();
          $valid= $model->validate() && $valid ;
				
            if ($valid)
            { 
                
                
            $purchaseModel->save();
            
            $model->purchase_id=$purchaseModel->id;
    
           $model->save();
             
                  
                  
//                     CVarDumper::dump($model->attributes,10,true);
//        CVarDumper::dump($model->errors,10,true);
//        
                    

                        
                        
                        
                
                $this->redirect(array('view', 'id' => $model->id));
                
            }
            
            
        }
       

        $this->render('create', array(
            'model' => $model,
            'purchaseModel'=>$purchaseModel,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Vehicle'])) {
            $model->attributes = $_POST['Vehicle'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Vehicle');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Vehicle('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Vehicle']))
            $model->attributes = $_GET['Vehicle'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Vehicle the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Vehicle::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Vehicle $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'vehicle-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
