//  greenhouse_iosTests.m
//  greenhouse-iosTests
//
//  Created by lauris on 27/02/14.
//  Copyright (c) 2014 greenhouse. All rights reserved.
//

#import <XCTest/XCTest.h>

@interface greenhouse_iosTests : XCTestCase

@end

@implementation greenhouse_iosTests

- (void)setUp
{
    [super setUp];
    // Put setup code here. This method is called before the invocation of each test method in the class.
}

- (void)tearDown
{
    // Put teardown code here. This method is called after the invocation of each test method in the class.
    [super tearDown];
}

- (void)testFail
{
    XCTAssertFalse(NO);
}

- (void)testFalse
{
    XCTAssertFalse(NO);
}

- (void)testTrue
{
    XCTAssertTrue(YES);
}


@end
